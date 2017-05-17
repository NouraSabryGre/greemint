

@extends('layouts.starter')


@section('title', 'Home')

@section('css')
  <link rel="stylesheet" href="/css/guest/index.css">
@endsection


@section('navigation')

  @include('guest.layouts.nav')


@endsection

@section('nav')
  @include('guest.layouts.nav')
@endsection



@section('content')
<!-- sign up -->
<div class="modal fade" id="signupmodel" role="dialog">
<div class="modal-dialog " role="document">
<div class="modal-content">
 <div id="modelheader" class="modal-header text-white">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h4 class="modal-title"> Register for Greenment </h4>
 </div>
 <div id="modelbody" class="modal-body">
     <div class="alert alert-info" role="alert">
<strong>harry up!</strong> Don't miss the oppertunity to be Healthy
</div>
     <form method="post">
         <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="form-group">
       <a id="google" class="btn btn-lg col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-1" href="https://accounts.google.com/Login?hl=en" role="button"> <span id="g">g+</span> Sign Up with Google</a>
               </div>
             </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
       <a id="facebook" class="btn btn-lg col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1" href="https://www.facebook.com/" role="button"> <span id="f">f</span> Sign Up with Facebook </a>
             </div>
             </div>
             </div>
          <br>

          <div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
      <div class="form-group">
        <label id="firstname" for="firstname" > <span class="glyphicon glyphicon-user"></span>FirstName</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your first name ">
</div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
 <div class="form-group">
        <label id="lastname" for="lastname" > <span class="glyphicon glyphicon-user"></span>LastName</label> <br>
        <input type="text" class="form-control" id="name" placeholder="Enter your last name ">
</div>
</div>
         </div>
         <div class="form-group">
        <label id="email" for="email">  <span class="glyphicon glyphicon-envelope"></span> Email</label>
        <input class="form-control" type="email" id="email" placeholder="Enter your email">
       </div>
         <div class="form-group">
        <label id="email" for="email">  <span class="glyphicon glyphicon-envelope"></span> Confirm your Email </label>
        <input class="form-control" type="email" id="email" placeholder="confirm your email">
       </div>

             <div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
<label id="pass" for="password"><span class="glyphicon glyphicon-lock"></span> Password</label>
          <input class="form-control" type="password" placeholder="password" id="password">
</div>
              </div>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
 <label id="pass" for="password"><span class="glyphicon glyphicon-lock"></span> Confirm Password</label><br>
          <input class="form-control" type="password" placeholder="confirm password" id="password">
    </div>
              </div>
     </div>

<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="form-group"> <!-- Date input -->
 <label id="date" class="control-label" for="date"><span class="glyphicon glyphicon-calendar"></span> Date of Birth</label>
 <input class="form-control" name="date" placeholder="MM/DD/YYY" type="text"/>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
         <div class="form-group">
          <label id="tele"><span class="glyphicon glyphicon-earphone"></span> Telephone</label><br>
          <input class="form-control" type="tel"placeholder="Enter your phone number " id="tel">
         </div>
             </div>
</div>
          <div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="form-group">
<label id="pass" for="password">Wight</label>
          <input class="form-control" type="password" placeholder="your wight" id="password">
</div>
              </div>
<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
 <label id="pass" for="password">Hight</label><br>
          <input class="form-control" type="password" placeholder="your hight" id="password">
    </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
 <label id="pass" for="password">Blood Type <span class="glyphicon glyphicon-tint"></span></label><br>
          <input class="form-control" type="password" placeholder="your blood type" id="password">
    </div>
              </div>

     </div>
         <label id="email"> Gender</label>
       <div class="form-check">
<label id="email" class="form-check-label">
<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
Male
</label>
           <label id="email" class="form-check-label">
<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
Female
</label>

         </div>
         <div class="alert alert-danger" role="alert">
<strong>Oh!</strong> You have to determine the number of your relative !!
</div>

         <label id="relative"> Number of relatives </label>
<div class="form-check form-check-inline">
<label class="form-check-label">
<input class="form-check-input" type="radio" name="inlineRadioOptions"  id="one" value="option1"> 1
</label>
</div>
<div class="form-check form-check-inline">
<label class="form-check-label">
<input class="form-check-input" type="radio" name="inlineRadioOptions"  id="one" value="option2"> 2
</label>
</div>
<div class="form-check form-check-inline">
<label class="form-check-label">
<input class="form-check-input" type="radio" name="inlineRadioOptions"  id="one" value="option3"> 3
</label>
</div>
    </form>

     <div class="modal-footer">
 <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
         <a id="signUp" class="btn btn-md btn-primary col-lg-offset-3" href="project2.html" role="button"> Signup </a>
</div>
</div>
</div>
</div>
</div>
  <!--  the end of registration form   -->



<div class="modal fade" id="loginmodel" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
 <div id="modelheader" class="modal-header">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h4 class="modal-title">Log in</h4>
 </div>
 <div id="modelbody" class="modal-body">

   <form>
       <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="form-group">
       <a id="google" class="btn btn-lg col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-2" href="https://accounts.google.com/Login?hl=en" role="button"> <span id="g">g+</span> Sign Up with Google</a>
               </div>
             </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
       <a id="facebook" class="btn btn-lg col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-2" href="https://www.facebook.com/" role="button"> <span id="f">f</span> Sign Up with Facebook </a>
             </div>
             </div>
             </div>

      <div class="form-group">
        <label for="email" id="email">  <span class="glyphicon glyphicon-envelope"></span> Email</label>
        <input class="form-control" type="email" id="email"placeholder="Enter your email">
       </div>
       <div class="form-group">
          <label for="password" id="pass">Password</label>
          <input class="form-control" type="password" placeholder="password" id="password"> <br>
       </div>
            <a id="login" class="btn btn-lg btn-success col-lg-offset-3" href="project2.html" role="button"> login </a><br>
       <div class="text-center">
       <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
       </div>
       </div>
    </form>

 </div>
</div>
</div>
</div>
</div>

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div id="modelheader" class="modal-header">
 <button type="button" class="close" data-dismiss="modal">
   <span aria-hidden="true">×</span>
   <span class="sr-only">Close</span>
 </button>
 <h4 class="modal-title">Recovery password</h4>
</div>
<div class="modal-body" id="modelbody">
 <p>Type your email account</p>
 <input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
</div>
<div class="modal-footer" id="modelbody">
 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
 <button type="button" class="btn btn-success">Recovery</button>
</div>
</div> <!-- /.modal-content -->
</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
<!-- End of login  -->

<!--carousel begin here -->

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
<!-- Overlay -->
<div class="overlay"></div>

<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
<li data-target="#bs-carousel" data-slide-to="1"></li>
<li data-target="#bs-carousel" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item slides active">
<div class="slide-1"></div>
<div class="hero">
 <hgroup>
     <h1>The greatest Wealth is Health</h1>
     <h3>protecting you and your family</h3>
 </hgroup>
</div>
</div>
<div class="item slides">
<div class="slide-2"></div>
<div class="hero">
 <hgroup>
     <h1>We are caring about your health</h1>
     <h3>Are you ready to get started !!</h3>
 </hgroup>
</div>
</div>
<div class="item slides">
<div class="slide-3"></div>
<div class="hero">
 <hgroup>
     <h1>Health is not valued till sickness comes</h1>
     <h3>protect your self</h3>
   </hgroup>
</div>
</div>
</div>
</div>

<!-- the content of the website -->

<div class="container">
<!--  starting the features part  -->
 <h1 id="features" class="text-center"> Features </h1>
<div id="one" class="row">
<div class="col-md-6">
<div class="thumbnail">
   <img id="imgkeep" src="/images/keep.png" style="width:100%">
   <div class="caption">
       <h2> Keep in touch with your profile </h2>
     <p class="text-center" id="par1">Simply you can open your profile and select
schedule for adding or delete or edit your drugs, aslo
you can search for new or specific drugs.</p>
   </div>
</div>
</div>

   <div class="col-md-6">
<div class="thumbnail">
   <img id="ask" src="/images/ask.png" style="width:100%">
   <div class="caption">
       <h2> Ask your Doctor </h2>
     <p class="text-center" id="par2"> Ask a Doctor, Get
Customized Answers</p>
       <p class="text-center" id="par2">
       Immediate Advice from Real Doctors.
       </p>
   </div>
</div>
</div>
</div>

<div id="one" class="row">
<div class="col-md-6">
<div class="thumbnail">
   <img id="imgcomm" src="/images/communicate.png" style="width:100%">
   <div class="caption">
       <h2 id="head1"> Easy Communication </h2>
     <p class="text-center" id="par3">Doctor communicate with the users through
writing reports about users or roshita</p>
   </div>
</div>
</div>

   <div class="col-md-6">
<div class="thumbnail">
   <img id="oper" src="/images/operation.png">
   <div class="caption">
       <h2 id="head"> Operation Decision </h2>
     <p class="text-center" id="par4"> Doctor can decide the operation type, the type
of the room, hospital name and the
operation time</p>

   </div>
</div>
</div>
</div>


<!--  end of the features part   -->
<hr>

<!--  starting our products part  -->
 <h1 id="product" class="text-center"> Our Products </h1>
<div id="one" class="row">
<div class="col-md-6">
<div class="thumbnail">
   <img id="watch" src="/images/watch.png" style="width:45%">
   <div class="caption">
       <h2 id="ard"> Arduoino Braclet </h2>
         <p class="text-center" id="par5">The bracelets are useful
         for conditions like diabetes, heart problems,
         pulmonary conditions. You may benefit
         from having one if you suffer from serious
         rare diseases.</p>
   </div>
    <a class="btn btn-lg col-lg-offset-5" role="button" data-toggle="modal" data-target="#buy" id="buy">Buy Now <span class="glyphicon glyphicon-menu-right"></span></a>
</div>
</div>

   <div class="col-md-6">
<div class="thumbnail">
   <img id="app" src="/images/apps.png" style="width:50%">
   <div class="caption">
       <h2 id="apps"> IOS App </h2>
         <p class="text-center" id="par6">
         The all-new Health app has been
         redesigned to make it easier to learn
         about your health and start reaching your goals,
             you can download it easily on your ios software to take care of your health.
         </p>
   </div>
    <a href="https://itunes.apple.com/ca/genre/ios/id36?mt=8" target="_blank" class="btn btn-lg col-lg-offset-5" role="button"   id="dow"> Download <span class="glyphicon glyphicon-menu-right"></span></a>
</div>
</div>
</div>

<!--    end of our product part  -->


<h1 class="text-center" id="doctor">Our Doctors </h1>

<div class="container">
<div class="row">
<div class="well">
 <div class="list-group">
   <a href="#" class="list-group-item">
         <div class="media col-md-3">
             <figure class="pull-left">
                 <img class="media-object img-circle img-responsive"  src="/images/center-eye-and-lasik-center-ophthalmology_20170327124759.jpg" alt="placehold.it/350x250" >
             </figure>
         </div>
          <div class="col-md-6">
              <h3> <small>Center</small> Eye And Lasik Center </h3>
             <p id="p1" class="list-group-item-text">
Prof. Sherif Gamal El Din Professor of Ophthalmology - Kasr Al Aini Dr.Ayah Marrie Lecturer of ophthalmology - Kasr Al Aini</p>
              <div class="stars">
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
             </div>
             <p id="p1" class="list-group-item-text"><span class="glyphicon glyphicon-star-empty"></span> Ophthalmology Doctor specialized in Adult Ophthalmology, Lasik, Vision Correction and Cataract and Vitreous Body and Retinal Surgery</p>
             <p id="p1" class="list-group-item-text"><span class="glyphicon glyphicon-map-marker"></span>                          6th of October : Cairo Medical Center the Main central axis beside police station
             </p>
             <p id="p1" class="list-group-item-text"> <span class="glyphicon glyphicon-usd"></span>Fees 150 LE</p>

         </div>
         <div class="col-md-3 text-center">
             <button id="book" type="button" class="btn btn-success btn-lg btn-block" role="button" data-toggle="modal" data-target="#bookmodel"> Book </button>
         </div>
   </a>
   <a href="#" class="list-group-item">
         <div class="media col-md-3">
             <figure class="pull-left">
                <img class="media-object img-circle img-responsive"  src="/images/doctor-al-demerdash-ahmed-omar-ophthalmology_20170112235109.jpg" alt="placehold.it/350x250" >
             </figure>
         </div>

         <div class="col-md-6">
             <h3> <small>Doctor</small> Aldemerdash Ahmed Omar </h3>
             <p id="p1" class="list-group-item-text">
Consultant of Ophthalmology - Armed Forces Hospitals</p>
              <div class="stars">
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>

             </div>
             <p id="p1" class="list-group-item-text"><span class="glyphicon glyphicon-star-empty"></span> Ophthalmology Doctor specialized in Vitreous Body and Retinal Surgery and Lasik, Vision Correction and Cataract</p>
             <p id="p1" class="list-group-item-text"><span class="glyphicon glyphicon-map-marker"></span>                          Hadayek El-Ahram : 217 District ِA ِِ, Khofo Gate, Opposite to Mira market , above Elwarda Elshamya confectionary, Second floor, Hadayek El Ahram
             </p>
             <p id="p1" class="list-group-item-text"> <span class="glyphicon glyphicon-usd"></span>Fees : 150 LE</p>
             <p id="p1" class="list-group-item-text"> <span class="glyphicon glyphicon-dashboard"></span>Waiting time 60 Minutes</p>

         </div>

         <div class="col-md-3 text-center">
             <button id="book1" type="button" class="btn btn-success btn-lg btn-block" role="button" data-toggle="modal" data-target="#bookmodel">Book</button>
         </div>
   </a>
   <a href="#" class="list-group-item">
         <div class="media col-md-3">
             <figure class="pull-left">
                 <img class="media-object img-circle img-responsive" src="/images/doctor-tarek-ramadan-kamel-ophthalmology_20170313144421.jpg" alt="placehold.it/350x250">
             </figure>
         </div>
        <div class="col-md-6">
            <h3> <small>Doctor</small> Tarek ramadan kamel </h3>
             <p id="p1" class="list-group-item-text">
Ophthalmology consultant, Fellow of the royal college of surgeons Edinburgh</p>
              <div class="stars">
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                 <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
             </div>
             <p id="p1" class="list-group-item-text"><span class="glyphicon glyphicon-star-empty"></span> Ophthalmology Doctor specialized in Lasik, Vision Correction and Cataract</p>
             <p id="p1" class="list-group-item-text"><span class="glyphicon glyphicon-map-marker"></span>                          Heliopolis : 14 sherif street roxy Heliopolis Cairo beside alhorya mall
             </p>
             <p id="p1" class="list-group-item-text"> <span class="glyphicon glyphicon-usd"></span>Fees 250 LE</p>
             <p id="p1" class="list-group-item-text"> <span class="glyphicon glyphicon-dashboard"></span>Waiting time 60 Minutes</p>

         </div>
         <div class="col-md-3 text-center">
             <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#bookmodel"> Book</button>
         </div>
   </a>
 </div>
 </div>
</div>
</div>


<!-- book model -->
<div class="modal fade" id="bookmodel" role="dialog">
<div class="modal-dialog " role="document">
<div class="modal-content">
 <div id="modelheader" class="modal-header text-white">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h2 class="modal-title text-center"> <span class="green">Gree</span><span class="ment">Mint</span> </h>
 </div>
 <div id="modelbody" class="modal-body">
     <form method="post">
          <div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
      <div class="form-group">
        <label id="firstname" for="firstname" > <span class="glyphicon glyphicon-user"></span>Full patient name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name ">
</div>
</div>
         </div>
         <div class="form-group">
        <label id="email" for="email">  <span class="glyphicon glyphicon-envelope"></span> Email</label>
        <input class="form-control" type="email" id="email" placeholder="Enter your email">
       </div>

         <div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="form-group"> <!-- Date input -->
 <label id="gender" class="control-label" for="date"> Gender</label>
   <select class="form-control" name="date" placeholder="type" type="text">
   <option value="">Gender</option>
   <option value="1">Male</option>
   <option value="1">Female</option>
   </select>
</div>
</div>
             <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="form-group">
          <label id="tele"><span class="glyphicon glyphicon-earphone"></span> Mobile No</label><br>
          <input class="form-control" type="tel"placeholder="Enter your phone number " id="tel">
         </div>
             </div>
</div>

         <div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<label id="adress"> Leave a message </label><br>
<textarea class="form-control" type="tel"placeholder="your message " id="tel" cols="40" rows="4"></textarea>
             </div>
</div>
         </div>
    </form>

     <div class="modal-footer">
 <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
         <a id="submit" class="btn btn-md btn-primary col-lg-offset-3" href="#" role="button"  data-dismiss="modal"> Submit </a>
</div>
</div>
</div>
</div>



<!--    adding registration for hospitals -->

<div class="container">
<div id="jumbotron" class="jumbotron text-center">
  <h1 id="h1">Help us finding better system </h1>
    <p class="lead">Register for your system here</p>
     <p class="lead">
    <a class="btn btn-lg col-lg-offset-0" role="button" data-toggle="modal" data-target="#addmodel"> <span class="glyphicon glyphicon-plus"></span> Add </a>
   </p>
</div>
</div>

<!-- add model -->
<div class="modal fade" id="addmodel" role="dialog">
<div class="modal-dialog " role="document">
<div class="modal-content">
 <div id="modelheader" class="modal-header text-white">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h4 class="modal-title text-center"> <span class="green">Gree</span><span class="ment">Ment</span> </h4>
 </div>
 <div id="modelbody" class="modal-body">
     <form method="post">
          <div class="dropdown">
<button id="dropdown" class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

Choose your system
<span class="caret"></span>
</button>
<ul  class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li><a href="#">Hospital </a></li>
<li><a href="#">Pharmacy</a></li>
<li><a href="#">Clinic</a></li>
</ul>
</div>
         <br>
         <div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
      <div class="form-group">
        <label id="firstname" for="name" >Name</label>
        <input type="text" class="form-control" id="name" placeholder="system name ">
</div>
</div>
         </div>
         <div class="form-group">
        <label id="email" for="email">  <span class="glyphicon glyphicon-envelope"></span> Email</label>
        <input class="form-control" type="email" id="email" placeholder="Type the email here">
       </div>
          <div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
      <div class="form-group">
        <label id="firstname" for="name" >Fax</label>
        <input type="text" class="form-control" id="name" placeholder="fax ">
</div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
 <div class="form-group">
        <label id="lastname" for="tele" >Telephone</label> <br>
        <input type="text" class="form-control" id="name" placeholder="number ">
</div>
</div>
         </div>


             <div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<label id="pass" for="password"> Address</label>
    <textarea class="form-control" type="adress" placeholder="Address.." id="password" cols="40" rows="5"></textarea>
</div>
              </div>
     </div>

         <label id="email"> Type of system </label>
       <div class="form-check">
<label id="email" class="form-check-label">
<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
General
</label>
           <label id="email" class="form-check-label">
<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
Specialized
</label>

         </div>

    </form>

     <div class="modal-footer">
 <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
         <a id="signUp" class="btn btn-md btn-primary col-lg-offset-3" role="button" href="#" data-dismiss="modal"> Submit </a>
</div>
</div>
</div>
</div>
</div>


<!--  FAQ  -->
<h1 class="text-center" id="faq">FAQ </h1>
<div class="container">
<header class="business-header">
     <div class="row">
         <div class="col-lg-12  text-center">
             <br><br><br><br><br><br>
             <hr>
            <div id="search" class="input-group col-lg-offset-3 col-md-offset-4 col-sm-offset-3 col-xs-offset-3">
<input type="text" class="form-control" placeholder="Ask a question .. ">
<div class="input-group-btn">
<button id="btn" class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i> Ask
</button>
</div>
         </div>
         </div>
     </div>
</header>
<br><br><br>
</div>

<h3 class="text-center h3">Frequently Asked Questions</h3>
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
 <div class="thumbnail">
     <img src="/images/speech-bubbles-with-question-marks_23-2147510127.jpg" alt="#">
   <div class="caption">
     <h3>
       what could be causing pain in left side of head and rining in ear ?
     </h3>
     <hr>
     <p>
       The possible explanations
are quite numerous.
.Some of these, perhaps the most
likely explanation
     </p>
     <a class="btn btn-success" role="button" href="https://www.zocdoc.com/answers/18316/what-could-be-causing-pain-in-left-side-of-head-and-ringing-in-left-ear" target="_blank">View More</a>
   </div>
 </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
 <div class="thumbnail">
     <img src="/images/speech-bubbles-with-question-marks_23-2147510127.jpg" alt="#">
   <div class="caption">
     <h3>
       What are the symptoms of liver disease?
     </h3>
     <hr>
     <p>
       Liver disease comes in many
forms and in varying severity.
Chronic heavy alcohol use can
lead to cirrhosis, which occurs
when the live  becomes nodular and is
     </p>
     <a class="btn btn-success" role="button" href="https://www.zocdoc.com/answers/3144/what-are-the-symptoms-of-liver-disease" target="_blank">View More</a>
   </div>
 </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
 <div class="thumbnail">
     <img src="/images/speech-bubbles-with-question-marks_23-2147510127.jpg" alt="#">
   <div class="caption">
     <h3>
       Would drinking more water
help with my indigestion?
     </h3>
     <hr>
     <p>
       First of all,
there is something call the
lower esophageal (or "cardiac")
sphincter separates your stomach  your esophagus. Heartburn or
     </p>
     <a class="btn btn-success" role="button" href="https://www.zocdoc.com/answers/10613/would-drinking-more-water-help-with-my-indigestion" target="_blank">View More</a>
   </div>
 </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
 <div class="thumbnail">
     <img src="/images/speech-bubbles-with-question-marks_23-2147510127.jpg" alt="#">
   <div class="caption">
     <h3>
       What is intestinal metaplasia?
     </h3>
     <hr>
     <p>
       Intestinal metaplasia" is
also known commonly as
"Barrett's esophagus." Basically,
what happens is that the chronic
irritation of the esophagus
     </p>
     <a class="btn btn-success" role="button" href="https://www.zocdoc.com/answers/3967/what-is-intestinal-metaplasia" target="_blank">View More</a>
   </div>
</div>

 </div>
</div>
</div>

<!--  our mission and team part  -->

<div class="text-center">
   <h1 id="mission">Our Mission </h1>
     <p class="lead">Our system is concerned with connection between users and doctors, aslo between doctors
     for user. And healthy tracking, quick emergency, reservation easily, supervision and nurses.
     </p>
 </div>
<hr>
<!-- our team   -->

  <div class="text-center">
   <h1 id="team" class="team">Our Team </h1>
      <div class="row">
        <div class="col-md-3">
             <img src="/images/hagar.png" alt="hagar" style="width:100%">
          <div class="caption">
               <p class="head1">Hajar Naser </p>
          </div>
      </div>
          <div class="col-md-3">
             <img src="/images/heba.png" alt="heba" style="width:100%">
          <div class="caption">
               <p class="head2">Heba Fayed</p>
          </div>
      </div>
          <div class="col-md-3">
             <img src="/images/noura.png" alt="noura" style="width:100%">
          <div class="caption">
               <p class="head3">Nourhan Sabry</p>
          </div>
      </div>
          <div class="col-md-3">
             <img src="/images/khadija.png" alt="khadija" style="width:100%">
          <div class="caption">
               <p class="head4">Khadiija Ashraf</p>
          </div>
      </div>
 </div>

      <div id="row1" class="row">
          <div class="col-md-4">
             <img src="/images/maii.png" alt="maii" style="width:85%">
          <div class="caption">
               <p class="head5">  Maii Hesham </p>
          </div>
      </div>
          <div class="col-md-4">
             <img src="/images/abdallah.png" alt="abdallah" style="width:85%">
          <div class="caption">
               <p class="head6">Abdallah Mamdouh</p>
          </div>
      </div>
           <div class="col-md-4">
             <img src="/images/mostafa.png" alt="mostafa" style="width:85%">
          <div class="caption">
               <p class="head7">Mostafa Akram</p>
          </div>
      </div>
 </div>
</div>
</div>

<!-- end of our team -->
<!--  end of our mission and our team   -->

<!--contact us-->

<section id="contact" style="">
     <div class="container">
         <div class="row">
             <div class="about_our_company" style="margin-bottom: 20px;">
                 <h1 style="color:#fff;">Get in Touch with us</h1>
                 <div class="titleline-icon"></div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-8">
                 <form name="sentMessage" id="contactForm" novalidate="">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="form-group">
                                 <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="form-group">
                                 <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                 <p class="help-block text-danger"></p>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                 <p class="help-block text-danger"></p>
                             </div>
                         </div>
                         <div class="clearfix"></div>
                         <div class="col-lg-12 text-center">
                             <div id="success"></div>
                             <button type="submit" class="btn btn-success btn-xl get"><span class="glyphicon glyphicon-send"></span> Send Message</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </section>


<!--end of contact us-->




<!--    footer    -->
<section class="footer">
<div class="container">
<div class="row">
   <div class="col-lg-3  col-md-3 col-sm-3">
       <div class="footer_dv">
           <h4>About US</h4>
           <ul>
               <li class="line_rv"><a href="#">Services</a></li>

                 <li><a href="#" data-toggle="modal" data-target="#terms">Terms and Conditions</a></li>
             </ul>
         </div>
     </div>
     <div class="col-lg-3  col-md-3 col-sm-3">
       <div class="footer_dv">
             <h4>Products</h4>
           <ul>
               <li><a href="https://itunes.apple.com/ca/genre/ios/id36?mt=8" target="_blank">IOS Application</a></li>
                 <li><a href="#">Braclet</a></li>
             </ul>
         </div>
     </div>
     <div class="col-lg-6  col-md-6 col-sm-4 col-xs-2">
       <div class="footer_dv">
             <div class="greemint">
 <span class="green2">Gree</span><span class="ment2">Mint</span>
             </div>
         </div>
     </div>
 </div>
</div>
</section>

<!-- terms and condition-->

<div class="modal fade" id="terms" role="dialog">
<div class="modal-dialog " role="document">
<div class="modal-content">
 <div id="modelheader" class="modal-header text-white">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h2 class="modal-title text-center"> <span class="green">Gree</span><span class="ment">Mint</span> </h>
 </div>
 <div id="modelbody" class="modal-body">
     <h3 class="text-center">Terms and conditions</h3>
     <p>These terms of service ("Terms", "Agreement") are an agreement between the operator of Greemint ("Website operator", "us", "we" or "our") and you ("User", "you" or "your"). This Agreement sets forth the general terms and conditions of your use of the http://www.greemint.com website and any of its products or services (collectively, "Website" or "Services").</p>

     <h3>Accounts and membership</h3>
     <p>If you create an account at the Website, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for the our Services. We may block your email address and Internet protocol address to prevent further registration.</p>
     <h3>User content</h3>
     <p>We do not own any data, information or material ("Content") that you submit to the Website in the course of using the Service. You shall have sole responsibility for the accuracy, quality, integrity, legality, reliability, appropriateness, and intellectual property ownership or right to use of all submitted Content. We may monitor Content on the Website submitted or created using our Services by you. Unless specifically permitted by you, your use of the Website does not grant us the license to use, reproduce, adapt, modify, publish or distribute the Content created by you or stored in your user account for commercial, marketing or any similar purpose. But you grant us permission to access, copy, distribute, store, transmit, reformat, display and perform the Content of your user account solely as required for the purpose of providing the Services to you. Without limiting any of those representations or warranties, we have the right, though not the obligation, to, in our own sole discretion, refuse or remove any Content that, in our reasonable opinion, violates any of our policies or is in any way harmful or objectionable.</p>
     <h3>Adult content</h3>
     <p>Please be aware that there may be certain adult or mature content available on the Website. Where there is mature or adult content, individuals who are less than 18 years of age or are not permitted to access such content under the laws of any applicable jurisdiction may not access such content. If we learn that anyone under the age of 18 seeks to conduct a transaction through the Services, we will require verified parental consent, in accordance with the Children's Online Privacy Protection Act of 1998 ("COPPA"). Certain areas of the Website may not be available to children under 18 under any circumstances.</p>
     <h3>Backups</h3>
     <p>We perform regular backups of the Website and Content and will do our best to ensure completeness and accuracy of these backups. In the event of the hardware failure or data loss we will restore backups automatically to minimize the impact and downtime.</p>
     <h3>Links to other websites</h3>
     <p>Although this Website may be linked to other websites, we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked website, unless specifically stated herein. We are not responsible for examining or evaluating, and we do not warrant the offerings of, any businesses or individuals or the content of their websites. We do not assume any responsibility or liability for the actions, products, services and content of any other third parties. You should carefully review the legal statements and other conditions of use of any website which you access through a link from this Website. Your linking to any other off-site pages or other websites is at your own risk.</p>
     <h3>Prohibited uses</h3>
     <p>In addition to other terms as set forth in the Agreement, you are prohibited from using the website or its content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.</p>
     <h3>Changes and amendments</h3>
     <p>We reserve the right to modify this Agreement or its policies relating to the Website or Services at any time, effective upon posting of an updated version of this Agreement on the Website. When we do we will revise the updated date at the bottom of this page. Continued use of the Website after any such changes shall constitute your consent to such changes. Policy was created with WebsitePolicies.com</p>
     <h3>Acceptance of these terms</h3>
     <p>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By using the Website or its Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to use or access the Website and its Services.</p>
     <h3>Contacting us</h3>
     <p>If you have any questions about this Agreement, please contact us.

This document was last updated on April 17, 2017</p>
     <div class="modal-footer">
 <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
         <a id="submit" class="btn btn-md btn-primary col-lg-offset-3" href="#" role="button"  data-dismiss="modal"> I Agree </a>
</div>
</div>
</div>
</div>
@endsection
