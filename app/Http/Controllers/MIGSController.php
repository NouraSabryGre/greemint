<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MIGSController extends Controller
{
    public function process($id)
    {
      $drugsOrder = \App\DrugsOrder::find($id);
      $conn = new \App\VPCPaymentConnection();
      $accessCode = \App\MIGS::$bank_test_accessCode ;
      $Merchant = \App\MIGS::$bank_test_merchant;
      $SECURE_SECRET = \App\MIGS::$bank_test_SECURE_SECRET;

      $conn->setSecureSecret($SECURE_SECRET);
      $returnPage = "http://127.0.0.1:8000/migs/recieve/" . $id;

      $amount  = $drugsOrder->order->amount * 100 ;
      $amount = (int) $amount;


      $arrParameteres = array(
          'Title'=> "PHP VPC 3 Party Transacion",
          'virtualPaymentClientURL'=>"https://migs.mastercard.com.au/vpcpay",
          'vpc_Version'=>"1",
          'vpc_Command'=> "pay",
          'vpc_AccessCode'=>$accessCode,
          'vpc_MerchTxnRef'=>$drugsOrder->order->id,
          'vpc_Merchant'=>$Merchant,
          'vpc_OrderInfo'=>$drugsOrder->order->id,
          'vpc_Amount'=>$amount,
          'vpc_ReturnURL'=>$returnPage,
          'vpc_Locale'=>"en",
          'vpc_Currency'=>'EGP'
      );

      ksort ($arrParameteres);

      $vpcURL = $arrParameteres["virtualPaymentClientURL"];
      $title  = $arrParameteres["Title"];
      unset($arrParameteres["virtualPaymentClientURL"]);
      unset($arrParameteres["SubButL"]);
      unset($arrParameteres["Title"]);


      foreach($arrParameteres as $key => $value) {
          if (strlen($value) > 0) {
              $conn->addDigitalOrderField($key, $value);
          }
      }

      // $conn->addDigitalOrderField("AgainLink", 0);
      $secureHash = $conn->hashAllFields();
      $conn->addDigitalOrderField("Title", $title);
      $conn->addDigitalOrderField("vpc_SecureHash", $secureHash);
      $conn->addDigitalOrderField("vpc_SecureHashType", "SHA256");

      $vpcURL = $conn->getDigitalOrder($vpcURL);


      return redirect($vpcURL);
    }

    public function re($id)
    {
      $drugsOrder = \App\DrugsOrder::find($id);

      $conn = new \App\VPCPaymentConnection();


      $acqResponseCode = $_GET["vpc_TxnResponseCode"];
      $bankMessage = \App\MIGS::getResultDescription($acqResponseCode);
      $acqResponseCode = 0;
      $bankMessage = "Transaction Successful";

      $SECURE_SECRET = \App\MIGS::$bank_test_SECURE_SECRET;

      $conn->setSecureSecret($SECURE_SECRET);

      $amountPaid = (int) $_GET["vpc_Amount"];
      $amountPaid /= 100 ;
      $amountPaid = (float) $amountPaid;

      $errorExists = false;

      $title  = $_GET["Title"];

      foreach($_GET as $key => $value) {
          if (($key!="vpc_SecureHash") && ($key != "vpc_SecureHashType") && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
              $conn->addDigitalOrderField($key, $value);
          }
      }
      $serverSecureHash	= array_key_exists("vpc_SecureHash", $_GET)	? $_GET["vpc_SecureHash"] : "";
      $secureHash = $conn->hashAllFields();
      if ($secureHash==$serverSecureHash) {

      } else {
          $errorsExist = true;
      }

      if ( !$errorExists)
      {
        if ($bankMessage == "Transaction Successful")
        $order = $drugsOrder->order;
        $order->paid = true;
        $order->save();
        return redirect('/order/drugs/' . $drugsOrder->id . '/success?ac=' . $acqResponseCode );
      }
      else
      {

      }

    }
}
