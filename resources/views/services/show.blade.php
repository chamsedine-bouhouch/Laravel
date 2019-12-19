<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AllooService</title>
    <meta charset="utf-8">
<!-- Adding Ajax -->
  
<!--  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
       <!-- Personalised stylesheet: myStyle -->
  <link rel="stylesheet" href="../css/myStyle.css">

    <!-- style login-register -->
      <style>
    @import "compass/css3";

$body-bg: #c1bdba;
$form-bg: #13232f;
$white: #ffffff;

$main: #1ab188;
$main-light: lighten($main,5%);
$main-dark: darken($main,5%);

$gray-light: #a0b3b0;
$gray: #ddd;

$thin: 300;
$normal: 400;
$bold: 600;
$br: 4px;

*, *:before, *:after {
  box-sizing: border-box;
}

html {
  overflow-y: scroll; 
}

body {
  background:$body-bg;
  font-family: 'Titillium Web', sans-serif;
}

a {
  text-decoration:none;
  color:$main;
  transition:.5s ease;
  &:hover {
    color:$main-dark;
  }
}

.form {
  background:rgba($form-bg,.9);
  padding: 40px;
  max-width:600px;
  margin:40px auto;
  border-radius:$br;
  box-shadow:0 4px 10px 4px rgba($form-bg,.3);
}

.tab-group {
  list-style:none;
  padding:0;
  margin:0 0 40px 0;
  &:after {
    content: "";
    display: table;
    clear: both;
  }
  li a {
    display:block;
    text-decoration:none;
    padding:15px;
    background:rgba($gray-light,.25);
    color:$gray-light;
    font-size:20px;
    float:left;
    width:50%;
    text-align:center;
    cursor:pointer;
    transition:.5s ease;
    &:hover {
      background:$main-dark;
      color:$white;
    }
  }
  .active a {
    background:$main;
    color:$white;
  }
}

.tab-content > div:last-child {
  display:none;
}


h1 {
  text-align:center;
  color:$white;
  font-weight:$thin;
  margin:0 0 40px;
}

label {
/*  position:absolute;
  transform:translateY(6px);
  left:13px;
  color:rgba($white,.5);
  transition:all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size:22px;
  .req {
    margin:2px;
    color:$main;*/
  }
}

label.active {
  transform:translateY(50px);
  left:2px;
  font-size:14px;
  .req {
    opacity:0;
  }
}

label.highlight {
  color:$white;
}

input, textarea {
  font-size:22px;
  display:block;
  width:100%;
  height:100%;
  padding:5px 10px;
  background:none;
  background-image:none;
  border:1px solid $gray-light;
  color:$white;
  border-radius:0;
  transition:border-color .25s ease, box-shadow .25s ease;
  &:focus {
    outline:0;
    border-color:$main;
  }
}

textarea {
  border:2px solid $gray-light;
  resize: vertical;
}

.field-wrap {
  position:relative;
  margin-bottom:40px;
}

.top-row {
  &:after {
    content: "";
    display: table;
    clear: both;
  }

  > div {
    float:left;
    width:48%;
    margin-right:4%;
    &:last-child { 
      margin:0;
    }
  }
}

.button {
  border:0;
  outline:none;
  border-radius:0;
  padding:15px 0;
  font-size:2rem;
  font-weight:$bold;
  text-transform:uppercase;
  letter-spacing:.1em;
  background:$main;
  color:$white;
  transition:all.5s ease;
  -webkit-appearance: none;
  &:hover, &:focus {
    background:$main-dark;
  }
}

.button-block {
  display:block;
  width:100%;
}

.forgot {
  margin-top:-20px;
  text-align:right;
}
  </style>
     <!--  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>

    <!-- Header include -->
   <?php 
   include("includes/header.php"); 
   ?>

<div class="collapse navbar-collapse" id="ftco-nav">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item "><a href="../" class="nav-link pl-0">Acceuil</a></li>
    <li class="nav-item active"><a href="../services" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="../about" class="nav-link">À Propos</a></li>
    <li class="nav-item"><a href="../projects" class="nav-link">Projets</a></li>
    <li class="nav-item"><a href="../blog" class="nav-link">Blog</a></li>
    <li class="nav-item"><a href="../contact" class="nav-link">Contact</a></li>
  </ul>
</div>
 
</nav>
<!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Services</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="../blog.php">Services <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$service->titre}} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
         
         
          
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 font-weight-bold text-center">Demandez une intervention en <span style="color:blue;">{{$service->categorie}}</span></h3>
               
                  

               
                <!-- <form action="#" class="p-5 bg-light">
                   <div class="form-row">
                    <div class="col-md-4 mb-3">

                  <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
                         <label for="name">Catégorie *</label>
     <div class="form-field">
       <div class="select-wrap">

        <select name="categorie" id="categorie" class="custom-select">
         <option value="">Choisir la catégorie</option>


         <option @if($service->categorie == "electricite") selected = "selected" @endif value="electricite">Électricité</option>
         <option @if($service->categorie == "plomberie") selected = "selected" @endif value="plomberie">Plomberie</option>
         <option @if($service->categorie == "climatisation") selected = "selected" @endif value="climatisation">Climatisation</option>
         <option @if($service->categorie == "chauffage") selected = "selected" @endif value="chauffage">Chauffage</option>
         <option value="">Autre</option>
       </select>
     </div>
   </div>
 </div>
 </div> 

 <div class="col-md-4 mb-3">
  <div class="form-group {!! $errors->has('service') ? 'has-error' : '' !!}">
     <label for="name">Type *</label>
     <div class="form-field">
       <div class="select-wrap">

        <select name="preference" id="preference" class="custom-select">
         <option value="">Choisir un type</option>
         <option @if($service->type == "installation") selected = "selected" @endif value="installation">Installation</option>
         <option @if($service->type == "depannage") selected = "selected" @endif value="depannage">Dépannage</option>
      
       </select>
     </div>
   </div>
 </div> 
</div>
 <div class="col-md-4 mb-3">
  <div class="form-group {!! $errors->has('service') ? 'has-error' : '' !!}">
     <label for="name">Service *</label>
     <div class="form-field">
       <div class="select-wrap">

        <select name="intervention" id="intervention" class="custom-select">
         <option value="">Choisir l'intervention</option>

         @foreach ($similarServices as $similarService) {
         <option value=""> {{$similarService->titre}}</option>

        }
         @endforeach
       




       </select>
     </div>
   </div>
 </div> 
</div>
</div>

<div class="form-row align-items-center">
     <div class="col-md-8 mb-3">
      <label for="validationDefault02">Adrrese *</label>
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        

      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
   
  </div>

     <div class="col-md-4 mb-3">
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        <label for="validationDefault02">Region *</label>
        <select name="categorie" id="categorie" class="custom-select">
         <option value="">Ariana</option>
         <option value="">Ben Arous</option>
         <option value="">Bardo</option>
         <option value="">Manar</option>
         <option value="">Manazah</option>
         <option value="">Marsa</option>
         <option value="">Mourouj</option>
         <option value="">Les berges du lac</option>
         <option value="">Lafayette</option>
         <option value="">centre urban </option>
         <option value="">Manouba</option>
         <option value="">Tunis</option>
       </select>
  </div>
 </div> 
 </div>
 <div class="form-row align-items-center">
     <div class="col-md-8 mb-3">
      <label for="validationDefault02">Adrrese *</label>
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        

      <input type="date" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
   
  </div>
   <div class="col-md-4 mb-3">
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        <label for="validationDefault02">L'heure *</label>
        <select name="categorie" id="categorie" class="custom-select">
         <option value="">8h à 9h30</option>
         <option value="">9h30 à 11h</option>
         <option value="">11h à 12h30</option>
         <option value="">12h30 à 14h</option>
         <option value="">14h à 15h30</option>
         <option value="">15h30 à 17h</option>
         <option value="">17h à 18h30</option>
         <option value="">18h30 à 20h</option>
         <option value="">20h à 21h30</option>
         <option value="">21h30 à 23h</option>
         <option value="">autre</option>
       </select>
  </div>
 </div> 
</div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Passer la commande" class="btn py-3 px-4 btn-primary">
                  </div>

                </form> -->





                   <form method="post" id="register_form">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details"> Détails de L'intervention</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Information Personnel</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Contact Details</a>
     </li>
    </ul>

    <div class="tab-content" style="margin-top:16px;">
     <!-- First Step Form -->
     <div class="tab-pane active" id="login_details">
      <div class="panel panel-default">
       <div class="panel-heading"> Détails de L'intervention</div>
       <div class="panel-body">
                <div class="form-row">
                    <div class="col-md-4 mb-3">

                  <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
                         <label for="name">Catégorie *</label>
     <div class="form-field">
       <div class="select-wrap">

        <select name="categorie" id="categorie" class="form-control">
         <option value="">Choisir la catégorie</option>


         <option @if($service->categorie == "electricite") selected = "selected" @endif value="electricite">Électricité</option>
         <option @if($service->categorie == "plomberie") selected = "selected" @endif value="plomberie">Plomberie</option>
         <option @if($service->categorie == "climatisation") selected = "selected" @endif value="climatisation">Climatisation</option>
         <option @if($service->categorie == "chauffage") selected = "selected" @endif value="chauffage">Chauffage</option>
         <option value="">Autre</option>
       </select>
     </div>
   </div>
 </div>
 </div> 

 <div class="col-md-4 mb-3">
  <div class="form-group {!! $errors->has('service') ? 'has-error' : '' !!}">
     <label for="name">Type *</label>
     <div class="form-field">
       <div class="select-wrap">

        <select name="preference" id="preference" class="form-control">
         <option value="">Choisir un type</option>
         <option @if($service->type == "installation") selected = "selected" @endif value="installation">Installation</option>
         <option @if($service->type == "depannage") selected = "selected" @endif value="depannage">Dépannage</option>
      
       </select>
     </div>
   </div>
 </div> 
</div>
 <div class="col-md-4 mb-3">
  <div class="form-group {!! $errors->has('service') ? 'has-error' : '' !!}">
     <label for="name">Service *</label>
     <div class="form-field">
       <div class="select-wrap">

        <select name="intervention" id="intervention" class="form-control">
         <option value="">Choisir l'intervention</option>

         @foreach ($similarServices as $similarService) {
         <option value=""> {{$similarService->titre}}</option>

        }
         @endforeach
       




       </select>
     </div>
   </div>
 </div> 
</div>
</div>
<div class="form-row align-items-center">
     <div class="col-md-8 mb-3">
      <label for="validationDefault02">Adrrese *</label>
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        

      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
   
  </div>

     <div class="col-md-4 mb-3">
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        <label for="validationDefault02">Region *</label>
        <select name="categorie" id="categorie" class="form-control">
         <option value="">Ariana</option>
         <option value="">Ben Arous</option>
         <option value="">Bardo</option>
         <option value="">Manar</option>
         <option value="">Manazah</option>
         <option value="">Marsa</option>
         <option value="">Mourouj</option>
         <option value="">Les berges du lac</option>
         <option value="">Lafayette</option>
         <option value="">centre urban </option>
         <option value="">Manouba</option>
         <option value="">Tunis</option>
       </select>
  </div>
 </div> 
 </div>
 <div class="form-row align-items-center">
     <div class="col-md-8 mb-3">
      <label for="validationDefault02">Adrrese *</label>
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        

      <input type="date" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
    </div>
   
  </div>
   <div class="col-md-4 mb-3">
    <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
        <label for="validationDefault02">L'heure *</label>
        <select name="categorie" id="categorie" class="form-control">
         <option value="">8h à 9h30</option>
         <option value="">9h30 à 11h</option>
         <option value="">11h à 12h30</option>
         <option value="">12h30 à 14h</option>
         <option value="">14h à 15h30</option>
         <option value="">15h30 à 17h</option>
         <option value="">17h à 18h30</option>
         <option value="">18h30 à 20h</option>
         <option value="">20h à 21h30</option>
         <option value="">21h30 à 23h</option>
         <option value="">autre</option>
       </select>
  </div>
 </div> 
</div>

        <br />
        <div align="center">
         <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Suivant</button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <!-- Second Step Form -->
     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading"> Information Personnel</div>
       <div class="panel-body">

        <div class="form">
      
<!--  -->
      <ul class="nav nav-tabs">
        <li class="tab active "><a  href="#signup">Sign Up</a></li>
        <li class="tab"><a  href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

        


        <br />
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Précedant</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Suivant</button>
        </div>
        <br />
       </div>
      </div>
     </div>
      <!-- Third Step Form -->
     <div class="tab-pane fade" id="contact_details">
      <div class="panel panel-default">
       <div class="panel-heading">Fill Contact Details</div>
       <div class="panel-body">
        <div class="form-group">
         <label>Enter Address</label>
         <textarea name="address" id="address" class="form-control"></textarea>
         <span id="error_address" class="text-danger"></span>
        </div>
        <div class="form-group">
         <label>Enter Mobile No.</label>
         <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
         <span id="error_mobile_no" class="text-danger"></span>
        </div>
        <br />
        <div align="center">
         <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Précedant</button>
         <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
        </div>
        <br />
       </div>
      </div>
     </div>
    </div>
   </form>
              </div>
            </div>

          <div class="col-lg-4 ftco-animate">
                 <h2 class="mb-3"># {{$service->titre}} </h2>
            <p>{{$service->description}}.</p>
            <p>
              <img src="{{ asset('img/' .$service->image)}}" alt="" class="img-fluid">
            </p>
            </div>
          </div> <!-- .col-md-8 -->


      </div>
    </section>

    <!-- Footer include -->
   <?php 
   include("includes/footer.php"); 
   ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>
<script type="text/javascript">
  $('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

    if (e.type === 'keyup') {
      if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
      if( $this.val() === '' ) {
        label.removeClass('active highlight'); 
      } else {
        label.removeClass('highlight');   
      }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
        label.removeClass('highlight'); 
      } 
      else if( $this.val() !== '' ) {
        label.addClass('highlight');
      }
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

// SCRIPT MULTISTEPS 
$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
  
  var error_email = '';
  var error_password = '';
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  // if($.trim($('#email').val()).length == 0)
  // {
  //  error_email = 'Email is required';
  //  $('#error_email').text(error_email);
  //  $('#email').addClass('has-error');
  // }
  // else
  // {
  //  if (!filter.test($('#email').val()))
  //  {
  //   error_email = 'Invalid Email';
  //   $('#error_email').text(error_email);
  //   $('#email').addClass('has-error');
  //  }
  //  else
  //  {
  //   error_email = '';
  //   $('#error_email').text(error_email);
  //   $('#email').removeClass('has-error');
  //  }
  // }
  
  // if($.trim($('#password').val()).length == 0)
  // {
  //  error_password = 'Password is required';
  //  $('#error_password').text(error_password);
  //  $('#password').addClass('has-error');
  // }
  // else
  // {
  //  error_password = '';
  //  $('#error_password').text(error_password);
  //  $('#password').removeClass('has-error');
  // }

  if(error_email != '' || error_password != '')
  {
   return false;
  }
  else
  {
   $('#list_login_details').removeClass('active active_tab1');
   $('#list_login_details').removeAttr('href data-toggle');
   $('#login_details').removeClass('active');
   $('#list_login_details').addClass('inactive_tab1');
   $('#list_personal_details').removeClass('inactive_tab1');
   $('#list_personal_details').addClass('active_tab1 active');
   $('#list_personal_details').attr('href', '#personal_details');
   $('#list_personal_details').attr('data-toggle', 'tab');
   $('#personal_details').addClass('active in');
  }
 });
 
 $('#previous_btn_personal_details').click(function(){
  $('#list_personal_details').removeClass('active active_tab1');
  $('#list_personal_details').removeAttr('href data-toggle');
  $('#personal_details').removeClass('active in');
  $('#list_personal_details').addClass('inactive_tab1');
  $('#list_login_details').removeClass('inactive_tab1');
  $('#list_login_details').addClass('active_tab1 active');
  $('#list_login_details').attr('href', '#login_details');
  $('#list_login_details').attr('data-toggle', 'tab');
  $('#login_details').addClass('active in');
 });
 
 $('#btn_personal_details').click(function(){
  var error_first_name = '';
  var error_last_name = '';
  
  // if($.trim($('#first_name').val()).length == 0)
  // {
  //  error_first_name = 'First Name is required';
  //  $('#error_first_name').text(error_first_name);
  //  $('#first_name').addClass('has-error');
  // }
  // else
  // {
  //  error_first_name = '';
  //  $('#error_first_name').text(error_first_name);
  //  $('#first_name').removeClass('has-error');
  // }
  
  // if($.trim($('#last_name').val()).length == 0)
  // {
  //  error_last_name = 'Last Name is required';
  //  $('#error_last_name').text(error_last_name);
  //  $('#last_name').addClass('has-error');
  // }
  // else
  // {
  //  error_last_name = '';
  //  $('#error_last_name').text(error_last_name);
  //  $('#last_name').removeClass('has-error');
  // }

  if(error_first_name != '' || error_last_name != '')
  {
   return false;
  }
  else
  {
   $('#list_personal_details').removeClass('active active_tab1');
   $('#list_personal_details').removeAttr('href data-toggle');
   $('#personal_details').removeClass('active');
   $('#list_personal_details').addClass('inactive_tab1');
   $('#list_contact_details').removeClass('inactive_tab1');
   $('#list_contact_details').addClass('active_tab1 active');
   $('#list_contact_details').attr('href', '#contact_details');
   $('#list_contact_details').attr('data-toggle', 'tab');
   $('#contact_details').addClass('active in');
  }
 });
 
 $('#previous_btn_contact_details').click(function(){
  $('#list_contact_details').removeClass('active active_tab1');
  $('#list_contact_details').removeAttr('href data-toggle');
  $('#contact_details').removeClass('active in');
  $('#list_contact_details').addClass('inactive_tab1');
  $('#list_personal_details').removeClass('inactive_tab1');
  $('#list_personal_details').addClass('active_tab1 active');
  $('#list_personal_details').attr('href', '#personal_details');
  $('#list_personal_details').attr('data-toggle', 'tab');
  $('#personal_details').addClass('active in');
 });
 
 $('#btn_contact_details').click(function(){
  var error_address = '';
  var error_mobile_no = '';
  var mobile_validation = /^\d{10}$/;
  if($.trim($('#address').val()).length == 0)
  {
   error_address = 'Address is required';
   $('#error_address').text(error_address);
   $('#address').addClass('has-error');
  }
  else
  {
   error_address = '';
   $('#error_address').text(error_address);
   $('#address').removeClass('has-error');
  }
  
  if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no = 'Invalid Mobile Number';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').removeClass('has-error');
   }
  }
  if(error_address != '' || error_mobile_no != '')
  {
   return false;
  }
  else
  {
   $('#btn_contact_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
  
 });
 
});
</script>
