
@extends('template')
@section('contenu')


  <div class="collapse navbar-collapse" id="ftco-nav">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item "><a href="../" class="nav-link pl-0">Acceuil</a></li>
    <li class="nav-item active"><a href="../services" class="nav-link">Demandez une Intervention</a></li>
<!--     <li class="nav-item"><a href="../about" class="nav-link">À Propos</a></li>
    <li class="nav-item"><a href="../projects" class="nav-link">Projets</a></li>
    <li class="nav-item"><a href="../blog" class="nav-link">Blog</a></li> -->
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
        <p class="breadcrumbs"><span class="mr-2"><a href="../">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="../services">Services <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$service->titre}} <i class="ion-ios-arrow-forward"></i></span></p>
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




                <form action="#" class="p-5 bg-light">
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

                </form>





                <!-- <form method="post" id="register_form">
                  <ul class="nav nav-tabs">
                   <li class="nav-item">
                    <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details"> Détails de L'intervention</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Informations Personnelles</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Validation</a>
                  </li>
                </ul>

                <div class="tab-content" style="margin-top:16px;">
                

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
                             <select name="categorie" id="categorie" class="form-control"> <option value="">Choisir la catégorie</option>
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
          <label for="validationDefault02">Date *</label>
          <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">


            <input type="date" class="form-control" id="validationDefault02" placeholder="votre Adrrese"  required>
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


     <div class="tab-pane fade" id="personal_details">
      <div class="panel panel-default">
       <div class="panel-heading">Ajoutez vos coordonnées</div>
       <div class="panel-body">

        <div class="form-row align-items-center">
          <div class="col-md-6 mb-3">
        <div class="form-group">
         <label>Prénom</label>
         <input type="text" name="first_name" id="first_name" class="form-control" />
         <span id="error_first_name" class="text-danger"></span>
        </div>
      </div>
       <div class="col-md-6 mb-3">
        <div class="form-group">
         <label>Nom</label>
         <input type="text" name="last_name" id="last_name" class="form-control" />
         <span id="error_last_name" class="text-danger"></span>
        </div>
      </div>
    </div>

            
        

                <div class="form-row align-items-center">
           <div class="col-md-8 mb-3">
            <label for="validationDefault02">Adrrese *</label>
            <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">


              <input type="text" class="form-control" id="validationDefault02" placeholder="Votre Adrresse" value="" required>
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

        <br />
        <div align="center">
         <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
         <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
        </div>
        <br />
       </div>
      </div>
     </div>


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
</form> -->
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

@endsection