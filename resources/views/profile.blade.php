@extends('layouts.starter')


@section('title', 'User Name')


@section('css')
  <link rel="stylesheet" href="/css/profile.css">
@endsection

@section('nav')

  @include('layouts.nav')

@endsection


@section('content')
<div class="modal fade" id="makeappo" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div id="modelheader" class="modal-header text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center"> <span class="green">Gree</span><span class="ment">Ment</span> </h4>
      </div>
      <div id="modelbody" class="modal-body">
        <form method="post">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <textarea type="text" class="form-control  form-control-danger" id="name" placeholder="Enter the medical case information here " cols="4" rows="8"></textarea>
              </div>
            </div>
          </div>
          <a data-toggle="collapse" href="#collapse1">
            <span class="glyphicon glyphicon-plus">
               Medical Reports
            </span>
          </a>
          <div id="collapse1" class="panel-collapse collapse">
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
          </div>
          <br><br>
          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="form-group">
                <label id="firstname" for="firstname" > <span class="glyphicon glyphicon-user"></span>Name</label>
                <input type="text" class="form-control" id="name" placeholder="name ">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="form-group">
                <label id="firstname" for="firstname"> <span class="glyphicon glyphicon-pencil"></span> Email</label>
                <input type="text" class="form-control" id="email" placeholder="abc@yahoo.com ">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="form-group">
                <label id="tele"><span class="glyphicon glyphicon-plus"></span> Mobile Number</label><br>
                <input class="form-control" type="tel" placeholder=" 010658423556 " id="tel">
              </div>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          <a id="signUp" class="btn btn-md btn-primary col-lg-offset-3" href="profile.html" role="button">
            Submit
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
       <!--  the end of relative form   -->



         <!-- sign up -->
<div class="modal fade" id="signupmodel" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div id="modelheader" class="modal-header text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Your Information </h4>
      </div>
      <div id="modelbody" class="modal-body">
          <form method="post">
              <h2> Contact Information </h2>
              <hr>
               <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label id="firstname" for="firstname" > <span class="glyphicon glyphicon-user"></span> FirstName</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your first name ">
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label id="lastname" for="lastname" > <span class="glyphicon glyphicon-user"></span> LastName</label> <br>
                    <input type="text" class="form-control" id="name" placeholder="Enter your last name ">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label id="tele"><span class="glyphicon glyphicon-plus"></span> Add another mobile</label><br>
                    <input class="form-control" type="tel"placeholder="Enter your phone number " id="tel">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                    <label id="tele"><span class="glyphicon glyphicon-plus"></span> Add your address</label><br>
                    <input class="form-control" type="tel"placeholder="Address" id="tel">
                  </div>
                </div>
              </div>
              <a id="email" href="#" onclick="show()">
                Email <span class="glyphicon glyphicon-pencil"></span>
              </a>
              <div id="dThreshold" style="display:none">
                <div class="row"><div class="col-xs-12"><input type="text" class="form-control"    name="email" placeholder="email"></div></div>
              </div>
              <h2 class="email"> Basic Information </h2>
              <hr>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group"> <!-- Date input -->
                    <label id="date" class="control-label" for="date"><span class="glyphicon glyphicon-calendar"></span> Date of Birth</label>
                    <input class="form-control" name="date" placeholder="MM/DD/YYY" type="text"/>
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

           </form>
           <div class="modal-footer">
             <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
             <a id="signUp" class="btn btn-md btn-primary col-lg-offset-3" href="profile.html" role="button">
               Save Changes
             </a>
           </div>
         </div>
       </div>
     </div>
   </div>
       <!--  the end of registration form   -->

<!-- Relative form -->
<div class="modal fade" id="relativemodel" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div id="modelheader" class="modal-header text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Relatives Information </h4>
      </div>
      <div id="modelbody" class="modal-body">
        <form method="post">
          <div class="alert alert-danger" role="alert">
            <strong>Oh!</strong> You should at least enter two !!
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group has-danger">
                <label id="firstname" for="firstname" > <span class="glyphicon glyphicon-user"></span>Name</label>
                <input type="text" class="form-control  form-control-danger" id="name" placeholder="name ">
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label id="tele"><span class="glyphicon glyphicon-plus"></span> Mobile Number</label><br>
                <input class="form-control " type="tel"placeholder=" number " id="tel">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label id="firstname" for="firstname" > <span class="glyphicon glyphicon-user"></span>Name</label>
                <input type="text" class="form-control" id="name" placeholder="name ">
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label id="tele"><span class="glyphicon glyphicon-plus"></span> Mobile Number</label><br>
                <input class="form-control" type="tel"placeholder=" number " id="tel">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label id="firstname" for="firstname" > <span class="glyphicon glyphicon-user"></span>Name</label>
                <input type="text" class="form-control" id="name" placeholder="name ">
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label id="tele"><span class="glyphicon glyphicon-plus"></span> Mobile Number</label><br>
                <input class="form-control" type="tel" placeholder=" number " id="tel">
              </div>
            </div>
          </div>
        </form>
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Choose action way
            <span class="caret"></span>
          </button>
          <ul  class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Call </a></li>
            <li><a href="#">Send SMS</a></li>
            <li><a href="#">call nearset hospital</a></li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          <a id="signUp" class="btn btn-md btn-primary col-lg-offset-3" href="profile.html" role="button"> Submit </a>
        </div>
      </div>
    </div>
  </div>
  </div>
       <!--  the end of relative form   -->

     <!-- Drugs form -->
<div class="modal fade" id="drugsmodel" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div id="modelheader" class="modal-header text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Drugs Information </h4>
      </div>
      <div id="modelbody" class="modal-body">
          <form method="post">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group has-danger">
                  <label id="firstname" for="firstname" >Drug Name</label>
                  <input type="text" class="form-control" id="name" placeholder="name ">
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label id="tele">Number of times</label><br>
                  <input class="form-control " type="text"placeholder="" id="tel">
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label id="tele">Date</label><br>
                  <input class="form-control " type="text"placeholder="00:00" id="tel">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group has-danger">
                  <label id="firstname" for="firstname" >Drug Name</label>
                  <input type="text" class="form-control" id="name" placeholder="name ">
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label id="tele">Number of times</label><br>
                  <input class="form-control " type="text"placeholder="" id="tel">
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label id="tele">Date</label><br>
                  <input class="form-control " type="text"placeholder="00:00" id="tel">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group has-danger">
                  <label id="firstname" for="firstname" >Drug Name</label>
                  <input type="text" class="form-control" id="name" placeholder="name ">
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label id="tele">Number of times</label><br>
                  <input class="form-control " type="text"placeholder="" id="tel">
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label id="tele">Date</label><br>
                  <input class="form-control " type="text"placeholder="00:00" id="tel">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group has-danger">
                  <label id="firstname" for="firstname" >Drug Name</label>
                  <input type="text" class="form-control" id="name" placeholder="name ">
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label id="tele">Number of times</label><br>
                  <input class="form-control " type="text"placeholder="" id="tel">
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                  <label id="tele">Date</label><br>
                  <input class="form-control " type="text"placeholder="00:00" id="tel">
                </div>
              </div>
            </div>
          </form>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            <a id="signUp" class="btn btn-md btn-primary col-lg-offset-3" href="profile.html" role="button">
              Submit
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
       <!--  the end of drugs form   -->
    <!--    start the container  -->
<section class="banner-section">
</section>
<section class="post-content-section">
  <div class="container">

      <div class="row">

          <div class="col-lg-3 col-md-3 col-sm-12">
               <div id="section1" class="well">
                  <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile" class="img-circle img-responsive" style="width:40%;">
              <input id="profile-image-upload" class="hidden" type="file">
              <div style="color: #0a3448;" >change profile image</div>
              </div>
                 <div class="text-center">
        <button  id="signup" type="button" class="btn btn-success " data-toggle="modal" data-target="#signupmodel"><span class="glyphicon glyphicon-user"></span> Edit Profile </button>
                     </div>
              </div>

              <div id="section2" class="well">
                  <h2 class="text-center">Relatives Member List</h2>
                   <div class="text-center">
                  <button id="member" type="button" class="btn" data-toggle="modal" data-target="#relativemodel"> Edit your relative list </button>
                  </div>
              </div>
               <div id="section4" class="well">
                  <h2 class="text-center">My Drugs</h2>
                   <div class="input-group">
  <input type="text" class="form-control" placeholder="Search Drug ">
  <div class="input-group-btn">
    <button class="btn btn-success" type="submit">Add
    </button>
  </div>
              </div>
                    <div class="text-center">
                  <button id="drug" type="button" class="btn" data-toggle="modal" data-target="#drugsmodel"> Edit my drugs schedule </button>
                   </div>
              </div>
              <div id="section6" class="well">
      <h2>Write a comment </h2>
  <div class="input-group">
      <input type="text" id="userComment" class="form-control input-sm chat-input" placeholder="Write your message here..." />
    <span class="input-group-btn" onclick="addComment()">
          <a href="#" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-comment"></span> Add Comment</a>
      </span>
  </div>
  <hr data-brackets-id="12673">
  </div>
              <div id="section5" class="well">
                  <h2 class="text-center">My Doctors</h2>
                   <div class="input-group">
  <input type="text" class="form-control"id="search" placeholder="Search for a doctor ">
  <div class="input-group-btn">
    <button id="btn" class="btn btn-success" type="submit">Add
      <i class="glyphicon glyphicon-search"></i>
    </button>
  </div>
              </div>
                  <div id="drop" class="dropdown text-center">
<button id="doctors" class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Doctor List
<span class="caret"></span></button>
<ul class="dropdown-menu">
  <li><a href="#"></a></li>
  <li><a href="#"></a></li>
  <li><a href="#"></a></li>
</ul>
</div>

              </div>
          </div>





          <div id="rightsection" class="col-lg-8 col-md-8 col-sm-12">

              <div class="tab-content">

                   <div id="menu4" class="tab-pane fade in active">
                       <div id="searchbtn" class="input-group">
  <input type="text" class="form-control"id="search" placeholder=" name">
  <div class="input-group-btn">
    <button id="btn" class="btn btn-success" type="submit">  <i class="glyphicon glyphicon-search"></i> Search

    </button>
  </div>
              </div>
                       <form>
                       <div class="pull-left" style="padding:20px;">
                           <!--   Location  -->
                    <select class="btn btn-md" id="drop2" name="location" width="50px">
                    <option value="">Location</option>
                    <option value="1">Cairo</option>
                    <option disabled>─────</option>
                    <option value="10">Ain Shams</option>
                    <option value="20">Down Town</option>
                    <option value="30">El Zeitoun</option>
                    <option value="40">Embaba</option>
                    <option value="50">Hadayek El Kobba</option>
                    <option value="60">Heliopolis</option>
                    <option value="70">Shoubra</option>
                    <option value="80">Sayeda Zeinab</option>
                    <option value="90">Nasr City</option>
                    <option value="100">Abasseya</option>
                    <option value="110">Matarya</option>
                    <option value="130">El Zawya El Hamra</option>
                    <option value="140">Faisal</option>
                    <option value="150">Shoubra El Khema</option>
                    <option disabled>──────────────────</option>
                    <option value="2">Giza</option>
                    <option disabled>─────</option>

                    <option value="160">Giza Square</option>
                    <option value="170">Dokki</option>
                    <option value="180">Haram</option>
                    <option value="190">Mohandessin</option>
                    <option value="200">Helwan</option>
                    <option value="210">Maadi</option>
                    <option value="220">Bolak El Dakror</option>

                    <option disabled>──────────────────</option>
                    <option value="3">Kalubiya</option>
                    <option disabled>─────</option>
                    <option value="230">Banha</option>
                    <option value="240">El Kanater El Khayreya</option>
                    <option value="250">Shebin El Kanater</option>
                    <option value="260">Kalyoub	</option>
                     <option disabled>──────────────────</option>

                    <option value="4">Alexandria</option>
                    <option disabled>─────</option>
                    <option value="270">Bolkly</option>
                    <option value="280">Sidi Bishr</option>
                    <option value="290">Agami</option>
                    <option value="300">Amreya</option>
                    <option value="310">El Asafra/ El Montaza</option>
                    <option value="320">Mahatet El Raml</option>
                    <option value="330">Sidy Gaber</option>
                    <option value="340">Sporting</option>
                    <option value="350">El Ibrahimia</option>
                    <option value="360">Moharram Bek</option>
                    <option value="370">Kabary/ Wardian</option>
                    <option value="380">Bakos</option>
                    <option disabled>──────────────────</option>

                    <option value="390">Tanta</option>
                    <option value="400">Minia</option>
                    <option value="410">Sohag</option>
                    <option value="420">Assiut</option>
                    <option value="430">Mansoura</option>
                    <option value="440">El Rehab</option>

                  </select>
                           </div>


                           <div class="pull-left" style="padding:20px;">
                           <!--    speciality   -->
                           <select class="btn btn-md" id="drop3" name="speciality" width="50px">
                                <option value="">Speciality</option>
                                <option value="1">Cardiovascular</option>
                                <option value="2">Chest & Allergy</option>
                                <option value="3">Dentistry</option>
                                <option value="4">Dermatology & Andrology	</option>
                                <option value="5">ENT	</option>
                                <option value="6">Gastrointestinal Tract	</option>
                                <option value="7">General Surgery</option>
                                <option value="8">Internal Medicine</option>
                                <option value="9">Neurosurgery</option>
                                <option value="10">Obesity & Thinness</option>
                                <option value="11">Obstetrics & Gynaecology</option>
                                <option value="12">Orthopedics</option>
                                <option value="13">Pediatrics</option>
                                <option value="14">Psychiatry	</option>
                                <option value="15">Rheumatology</option>
                                <option value="16">Urology</option>
                                <option value="17">G.P.</option>
                                <option value="18">Opthalmology</option>
                                <option value="19">Endocrinology</option>
                                <option value="20">Oncology</option>
                                <option value="21">Chronic Diseases</option>
                                <option value="22">Plastic Surgery</option>
                                <option value="23">Physiotherapy</option>
                                <option value="24">Autoimmune Diseases</option>
                                <option value="25">Anaesthesia</option>
                                <option value="26">Radiology lab</option>
                                <option value="27">Medical lab</option>
                                <option value="28">Hospital</option>
                                <option value="29">Center</option>
                                <option value="30">clinic</option>
                                <option value="31">sycology</option>
                                <option value="32">clinical pathologist</option>
                           </select>
                           </div>

                           <div class="pull-left" style="padding:20px;">
                            <!--    Gender   -->
                              <select class="btn btn-md" id="drop4" name="gender" width="50px">
                                  <option value=""> Gender</option>
                                  <option value="1"> Male</option>
                                  <option value="2"> Female</option>
                              </select>
                           </div>
                       </form>
                       </div>

                  <div id="menu2" class="tab-pane fade">
    <h1 class="text-center">Order Drug </h1>
                       <div class="input-group">
  <input type="text" class="form-control"id="search" placeholder="Search for a drug ">
  <div class="input-group-btn">
    <button id="btn" class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i> Search

    </button>
  </div>
              </div>


  </div>
                  <div id="menu3" class="tab-pane fade">
    <h1 class="text-center">Find Nearest Hospitals</h1>

<!-- book model -->
                      <br>
          <form method="post">
               <div class="row">
 <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="form-group"> <!-- Date input -->
      <label id="gender" class="control-label" for="date"> Country</label>
       <input class="form-control" type="tel"placeholder="enter your country" id="country">
    </div>
  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
               <label id="tele"> City</label><br>
               <input class="form-control" type="tel"placeholder="city " id="city">
              </div>
                  </div>
</div>
               <div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
           <div class="form-group">
             <label id="firstname" for="location" >Location</label>
             <input type="text" class="form-control" id="name" placeholder="location ">
     </div>
     </div>
              </div>
               <div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
           <div class="form-group">
             <label id="firstname" for="location" >Hospital Name (optional)</label>
             <input type="text" class="form-control" id="name" placeholder="hospital ">
     </div>
     </div>
              </div>
              <div class="text-center">
              <button id="btn" class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i> Search

    </button>
              </div>

              </div>

         </form>
  </div>

      </div>
          </div>

<!--   donation form  -->



           </div>

  </div> <!-- /container -->
</section>
<!--    end of the container  -->
@endsection
