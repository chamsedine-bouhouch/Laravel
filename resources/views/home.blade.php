@extends('template')
  <!-- Header include -->
  @section('contenu')

<div class="collapse navbar-collapse" id="ftco-nav">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item active"><a href="" class="nav-link pl-0">Acceuil</a></li>
    <li class="nav-item"><a href="services" class="nav-link">Demandez une Intervention</a></li>
 <!--    <li class="nav-item"><a href="about" class="nav-link">À Propos</a></li>
    <li class="nav-item"><a href="projects" class="nav-link">Projets</a></li>
    <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li> -->
    <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
  </ul>
</div>

</nav>
<!-- END nav -->

<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image:url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
    
    <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
      <div class="col-md-6 text ftco-animate pl-md-5">
        <h1 class="mb-4 "> !تلوّج على فني صنايعي وثقة <span>Nos techniciens à votre service</span></h1>
<!--         <h3 class="">Un réseau de plus de 300 techniciens validés</h3>
 -->        <p><a href="services" class="btn btn-secondary px-4 py-3 mt-3">Demandez un technicien</a></p>
      </div>
    </div>
  </div>
</div>

<div class="slider-item" style="background-image:url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
 <div class="overlay"></div>
 <div class="container">
  <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
    <div class="col-md-6 text ftco-animate pl-md-5">
      <h1 class="mb-4">!عندك مشكل محيرك وملقيتش الحل <span>le dépannage est notre expertise</span></h1>
      <h3 class="subheading"></h3>
      <p><a href="services" class="btn btn-secondary px-4 py-3 mt-3">Diagnostiquez votre problème</a></p>
    </div>
  </div>
</div>
</div>
</section>


<section class="ftco-section ftco-no-pt ftco-margin-top">
 <div class="container">
  <div class="row">












<div class="col-md-4">
    <div class="request-quote">
     <div class="bg-primary py-4">
      <span class="subheading">Rejoignez DaryDar</span>
      <h3>Récrutement Dépanneurs</h3>
    </div>

              {!! Form::open(['route' => 'storePost']) !!}
                  <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => ' Prénom Nom ']) !!}
      {!! $errors->first('name', '<small class="help-block" style="color: #dc3545">:message</small>') !!}
    </div>
    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
      {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => ' Votre Email']) !!}
      {!! $errors->first('email', '<small class="help-block" style="color: #dc3545">:message</small>') !!}
    </div>   
    <div class="form-group {!! $errors->has('phone') ? 'has-error' : '' !!}">
      {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => ' Votre Numéro']) !!}
      {!! $errors->first('phone', '<small class="help-block" style="color: #dc3545">:message</small>') !!}
    </div>

    <div class="form-group {!! $errors->has('spécialité') ? 'has-error' : '' !!}">
      {!! Form::text('spécialité', null, ['class' => 'form-control', 'placeholder' => ' Votre Spécialité']) !!}
      {!! $errors->first('spécialité', '<small class="help-block" style="color: #dc3545">:message</small>') !!}
    </div>

  <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
    {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => ' Ajoutez un message']) !!}
    {!! $errors->first('texte', '<small class="help-block" style="color: #dc3545">:message</small>') !!}
  </div >
              {!! Form::submit('Postulez', ['class' => 'btn btn-info pull-right']) !!}
              {!! Form::close() !!}

</div>      
</div>
<!--  <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
{!!Form::select('size', ['E' => 'Électricité', 'P' => 'Plomberie','C' => 'Climatisation', 'S' => 'Chauffage', 'A' => 'Autre'], null, ['placeholder' => 'Choisir votre catégorie '], ['class' => 'form-control form-control-lg']);!!}
</div> -->

    



























<div class="col-md-8 wrap-about py-5 ftco-animate">
   @if ($message = Session::get('success'))
 <div class="alert alert-success">
   <p> {{ $message }} </p>
 </div>
  @endif
 <div class="heading-section mb-5">
   <h2 class="mb-4">DaryDar réunit tous les dépanneurs du bâtiment </h2>
 </div>
 <div class="">
   <p class="mb-5"> Nous vous presontons une plateforme complete de mise en relation entre demandeurs de service et les prestataires, le client sera accompagné dés le debut par nos conseillers en finissant par un techncien hautement qualifié et disponible dans les brefs delais.</p>
   <!-- <p><a href="about" class="btn btn-secondary px-5 py-3">Lire plus</a></p> -->
 </div>
 <br>
 <br>
<!--  <div class=" justify-content-center">
   <div class="form-row">
 <div class="col-md-4 mt-2">
  
  <div class="form-group  {!! $errors->has('adresse') ? 'has-error' : '' !!}">
  
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Tapez votre Numéro" >
       {!! $errors->first('adresse', '<small class="help-block" style="color: #dc3545" >:message</small>') !!}

  </div>
</div>

<div class="col-md-3 mt-2 d-flex   justify-content-center">
{!! Form::submit('Envoyer !', ['class' => 'btn btn-info']) !!}
              {!! Form::close() !!}
</div> 
</div>
 </div> -->
 
</div>
 
  


</div>
</div>
</section>


<!-- services -->

<section >
 <div class="container">
  <div class="row justify-content-center mb-5 pb-2">
    <div class="col-md-8 text-center heading-section ftco-animate">
      <span class="subheading">Services</span>
     <h2 class="mb-4">Nos Services</h2>
     <p>Nous avons choisi pour vous un paquet de services les plus demandés</p>                     
   
   </div>
 </div>
 <div class="row">
  <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
    <div class="media block-6 d-block text-center">
      <div class="shadow p-3 mb-5 bg-white rounded">
        <div class="icon d-flex justify-content-center align-items-center">
       <a href="services?categorie=electricite"><span style="color:#4ad7d1 "  class="flaticon-plug" ></span></a>
     </div>
      </div>
      
     <div class="media-body p-2 mt-3">
      <h3 class="heading">Électricité</h3>
      <p>Nos dépanneurs sont là pour vous offrir des prestations pour tous vos besoins en électricité.</p>
    </div>
  </div>      
</div>
<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
  <div class="media block-6 d-block text-center">
     <div class="shadow p-3 mb-5 bg-white rounded">
    <div class="icon d-flex justify-content-center align-items-center">
      <a href="services?categorie=plomberie"><span style="color:#4ad7d1 " class="flaticon-pipe"></span></a>
    </div>
</div>
    <div class="media-body p-2 mt-3">
      <h3 class="heading">Plomberie</h3>
      <p>Nos dépanneurs sont à votre disposition pour toutes pannes et installations en plomberie.</p>
    </div>
  </div>    
</div>
<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
  <div class="media block-6 d-block text-center">
     <div class="shadow p-3 mb-5 bg-white rounded">
    <div class="icon d-flex justify-content-center align-items-center">
      <a href="services?categorie=climatisation"><span style="color:#4ad7d1 " class="flaticon-air-conditioner"></span></a>
    </div>
</div>
    <div class="media-body p-2 mt-3">
      <h3 class="heading">Climatisation</h3>
      <p>Nos dépanneurs sont là pour entretenir votre climatiseur ou mettre en place une nouvelle installation.</p>
    </div>
  </div>    
</div>
<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
  <div class="media block-6 d-block text-center">
     <div class="shadow p-3 mb-5 bg-white rounded">
    <div class="icon d-flex justify-content-center align-items-center">
      <a href="services?categorie=chauffage"><span style="color:#4ad7d1 " class="flaticon-heater"></span></a>
    </div>
</div>
    <div class="media-body p-2 mt-3">
      <h3 class="heading">Chauffage</h3>
      <p>Nos dépanneurs sont à votre disposition pour entretenir votre chaudière ou mettre en place une nouvelle installation.</p>
    </div>
  </div>      
</div>
</div>
</div>


<div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading"> Qualité de service</span>
            
             <h2 class="mb-4">La qualité de service est notre priorité</h2>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="img/icon/001-stopwatch.png" alt="">>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Disponible </br> 7/7 </h3>
                <p>Notre réseau de techniciens compétents est dispatché sur le grand Tunis. Ils sont disponibles même pendant des heures tardives.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="img/icon/002-award.png" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Service de qualité</h3>
                <p>Nos techniciens sont sélectionnés et testés par DaryDar pour vous offrir la meilleure prestation.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="img/icon/005-shield.png" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Garantie assuré</h3>
                <p>Darydar vous offre une garantie sur les interventions et un service de suivi à la hauteur de vos attentes.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="img/icon/004-save-money.png" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Transparence de prix</h3>
                <p>Plus de surprises sur les prix avec DaryDar ! Nous vous proposons une grille tarifaire selon votre besoin en réparation/installation*.<br>
<!-- <small>*(Dans le cas où le problème que vous rencontrez nécessite un travail plus en profondeur, un devis vous sera proposez sur place)</small>  -->
.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
</section>
<!-- End  services -->


    <section class="ftco-intro " style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
     <div class=""></div>
     <div class="container">
      <div class="row d-flex justify-content-center ">
       <div class="col-10  d-flex text-center" >
        <h2 style="color:  #001730">Demandez d'être Appeler</h2>
        <!-- <p>DaryDar met à votre disposition des prosfessionels de qualité dans votre zone</p> -->
        </div>
        
  
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10">
        {!! Form::open(['route' => 'storePhone']) !!}
    <div class="form-row align-items-stretch d-flex">
<!--  <div class="col-md-4 mt-2">
   <div class="input-group mb-2 mr-sm-2">
     <div class="form-group {!! $errors->has('mailing') ? 'has-error' : '' !!}">
      <div class="input-group-prepend">
      <div class="input-group-text">@</div>
    </div>
      {!! Form::text('mailing', null, ['class' => 'form-control', 'placeholder' => ' Votre Email']) !!}
      {!! $errors->first('mailing', '<small class="help-block"  style="color: #dc3545">:message</small>') !!}
    </div>  
</div>
          <div class="form-group {!! $errors->has('mailing') ? 'has-error' : '' !!}">
      {!! Form::text('mailing', null, ['class' => 'form-control', 'placeholder' => ' Votre Email']) !!}
      {!! $errors->first('mailing', '<small class="help-block"  style="color: #dc3545">:message</small>') !!}
    </div> 
</div> -->
<div class="col-md-4 mt-3 text-center">
      
      <div class="input-group mb-2 {!! $errors->has('number') ? 'has-error' : '' !!}">
        <div class="input-group-prepend">
          <div class="input-group-text">+216</div>
        </div>
         {!! Form::number('number', null, ['class' => 'form-control', 'placeholder' => ' Laissez votre Numéro']) !!}
          {!! $errors->first('number', '<small class="help-block"  style="color: #dc3545">:message</small>') !!}
      </div>
    </div>
 <div class="col-md-2 mt-3 text-center">

    {!! Form::submit('Rappelez moi !', ['class' => 'btn btn-info btn-lg  ']) !!} 
    </div>
    {!! Form::close() !!}
      </div>
    </div>
    


  </div>

 

</section>







<!-- Start Team section -->
<section class="ftco-section">
 <div class="container">
  <div class="row justify-content-center mb-5 pb-2">
    <div class="col-md-8 text-center heading-section ftco-animate">
     <span class="subheading">Team</span>
     <h2 class="mb-4">Notre équipe de professionnels</h2>
     <p>Une équipe jeune et passionnée avec des expert dans tous les domaines de dépannages.</p>
   </div>
 </div>	
 <div class="row d-flex justify-content-center">
   <div class="col-md-6 col-lg-4 ftco-animate">
    <div class="staff">
     <div class="img-wrap d-flex align-items-stretch">
      <div class="img align-self-stretch" style="background-image: url(images/taha.jpg);"></div>
    </div>
    <div class="text pt-3 text-center">
      <h3>Taha Khaled</h3>
      <span class="position mb-2">CEO</span>
      <div class="faded">
       <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
       <ul class="ftco-social text-center">
        <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li> -->
        <li class="ftco-animate"><a href="https://www.facebook.com/tahaa.khaleed"  rel="noopener noreferrer" target="_blank"><span class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="mailto:tahakhaled994@gmail.com"  rel="noopener noreferrer" target="_blank"><span class="icon-google-plus"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
    </div>
  </div>
</div>
</div>
<div class="col-md-6 col-lg-4 ftco-animate">
  <div class="staff">
   <div class="img-wrap d-flex align-items-stretch">
    <div class="img align-self-stretch" style="background-image: url(images/chams.jpg);"></div>
  </div>
  <div class="text pt-3 text-center">
    <h3>Chamseddine Bouhouch</h3>
    <span class="position mb-2">COO</span>
    <div class="faded">
     <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
     <ul class="ftco-social text-center">
     <!--  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li> -->
      <li class="ftco-animate"><a href="https://www.facebook.com/chamseddine.bouhouch"  rel="noopener noreferrer" target="_blank"><span class="icon-facebook"></span></a></li>
      <li class="ftco-animate"><a href="mailto:bouhouchchamseddine@gmail.com" ><span class="icon-google-plus"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
  </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 ftco-animate">
  <div class="staff">
   <div class="img-wrap d-flex align-items-stretch">
    <div class="img align-self-stretch" style="background-image: url(images/wiem.jpg);"></div>
  </div>
  <div class="text pt-3 text-center">
    <h3>Wiem </h3>
    <span class="position mb-2">CMO</span>
    <div class="faded">
     <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
     <ul class="ftco-social text-center">
      <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li> -->
      <li class="ftco-animate"><a href="https://www.facebook.com/wima.waouma.7" rel="noopener noreferrer" target="_blank"><span class="icon-facebook"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- <div class="col-md-6 col-lg-3 ftco-animate">
  <div class="staff">
   <div class="img-wrap d-flex align-items-stretch">
    <div class="img align-self-stretch" style="background-image: url(images/team-4.jpg);"></div>
  </div>
  <div class="text pt-3 text-center">
    <h3>Naceur</h3>
    <span class="position mb-2">Electricien</span>
    <div class="faded">
     <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
     <ul class="ftco-social text-center">
      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
  </div>
</div>
</div>
</div> -->
</div>
</div>
</section>

<!-- <section class="ftco-section ftco-no-pt ftco-no-pb">
 <div class="container-fluid p-0">
  <div class="row no-gutters justify-content-center mb-5 pb-2">
    <div class="col-md-6 text-center heading-section ftco-animate">
     <span class="subheading">Projets</span>
     <h2 class="mb-4">Projets Réalisés</h2>
     <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
   </div>
 </div>
 <div class="row no-gutters">
   <div class="col-md-6 col-lg-3 ftco-animate">
    <div class="project">
     <img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
     <div class="text">
      <span>Commercial</span>
      <h3><a href="project.php">San Francisco Tower</a></h3>
    </div>
    <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
      <span class="icon-expand"></span>
    </a>
  </div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
   <div class="text">
    <span>Commercial</span>
    <h3><a href="project.php">San Francisco Tower</a></h3>
  </div>
  <a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="icon-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
   <div class="text">
    <span>Commercial</span>
    <h3><a href="project.php">San Francisco Tower</a></h3>
  </div>
  <a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="icon-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
   <div class="text">
    <span>Commercial</span>
    <h3><a href="project.php">San Francisco Tower</a></h3>
  </div>
  <a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="icon-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
   <div class="text">
    <span>Commercial</span>
    <h3><a href="project.php">San Francisco Tower</a></h3>
  </div>
  <a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="icon-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
   <div class="text">
    <span>Resedencial</span>
    <h3><a href="project.php">Rose Villa House</a></h3>
  </div>
  <a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="icon-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
   <div class="text">
    <span>Commercial</span>
    <h3><a href="project.php">San Francisco Tower</a></h3>
  </div>
  <a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="icon-expand"></span>
  </a>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="project">
   <img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
   <div class="text">
    <span>Commercial</span>
    <h3><a href="project.php">San Francisco Tower</a></h3>
  </div>
  <a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
    <span class="icon-expand"></span>
  </a>
</div>
</div>
</div>
</div>
</section> -->
<section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
 <div class="container ">
  <div class="row ">
    <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18 d-flex">
        <div class="text d-flex align-items-center">
          <strong class="number" >2018</strong>
        </div>
        <div class="text-2">
         <span>Année <br> de Création</span>
       </div>
     </div>
   </div>
   <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
    <div class="block-18 d-flex">
      <div class="text d-flex align-items-center">
        <strong class="number" data-number="25">0</strong>
      </div>
      <div class="text-2">
       <span>Techniciens <br> Disponibles</span>
     </div>
   </div>
 </div>
 <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
  <div class="block-18 d-flex">
    <div class="text d-flex align-items-center">
      <strong class="number" data-number="20">0</strong>
    </div>
    <div class="text-2">
     <span>Zones   <br>Desservies</span>
   </div>
 </div>
</div>
<!-- <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
  <div class="block-18 d-flex">
    <div class="text d-flex align-items-center">
      <strong class="number" data-number="300">0</strong>
    </div>
    <div class="text-2">
     <span>Happy <br>Customers</span>
   </div>
 </div>
</div> -->
</div>
</div>
</section>

<!-- testimony -->
<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row ftco-animate">
     <div class="col-md-6 col-lg-6 col-xl-4">
      <div class="heading-section ftco-animate">
        <span class="subheading">Services</span>
        <h2 class="mb-4">La garantie Dépannage à Domicile</h2>
      </div>
      <div class="services-flow">
       <div class="services-2 p-4 d-flex ftco-animate">
        <div class="icon" style="color:#fe4a49 ">
         <span class="flaticon-engineer"></span>
       </div>
       <div class="text">
         <h3>Expert &amp; Professional</h3>
         <p>Nos techniciens sont sélectionnés pour vous offrir la meilleure prestation.</p>
       </div>
     </div>
     <div class="services-2 p-4 d-flex ftco-animate">
      <div class="icon">
       <span class="flaticon-engineer-1"></span>
     </div>
     <div class="text">
       <h3>Service Après Vente</h3>
       <p>Darydar vous propose un grantie de ces interventions</p>
     </div>
   </div>
   <div class="services-2 p-4 d-flex ftco-animate">
    <div class="icon">
     <span class="flaticon-engineer-2"></span>
   </div>
   <div class="text">
     <h3>7/7 Assistance Client</h3>
     <p>Nous sommes à votre disposition toute la semaine</p>
   </div>
 </div>
</div>
</div>

<div class="col-xl-1 d-xl-block d-none"></div>
<div class="col-md-6 col-lg-6 col-xl-7">
 <div class="heading-section ftco-animate mb-5">
  <span class="subheading"> Témoignage</span>
  <h2 class="mb-4">Clients Satisfaits</h2>
  <p>Les témoignages de nos clients</p>
</div>
<div class="carousel-testimony owl-carousel">
  <div class="item">
    <div class="testimony-wrap">
      <div class="text bg-light p-4">
       <span class="quote d-flex align-items-center justify-content-center">
        <i class="icon-quote-left"></i>
      </span>
      <p> Merci Darydar pour la qualité de service que j’ai eu, pour votre disponibilité et votre patience à toute preuve. Je recommande ! </p>
      <p class="name">Menel.A</p>
      <span class="position">Consultante</span>
    </div>
    <div class="user-img" style="background-image: url()">
    </div>
  </div>
</div>
<div class="item">
  <div class="testimony-wrap">
    <div class="text bg-light p-4">
     <span class="quote d-flex align-items-center justify-content-center">
      <i class="icon-quote-left"></i>
    </span>
    <p> Service de qualité exceptionnelle, technicien compétent. Mon problème a été résolu en moins d’une heure. </p>
    <p class="name">Mehrez</p>
    <span class="position">commerçant</span>
  </div>
  <div class="user-img" style="background-image: url()">
  </div>
</div>
</div>
<div class="item">
  <div class="testimony-wrap">
    <div class="text bg-light p-4">
     <span class="quote d-flex align-items-center justify-content-center">
      <i class="icon-quote-left"></i>
    </span>
    <p>J’ai adoré le devis en ligne, c’est nouveau en Tunisie et ça permet d’éviter les mauvaises surprises. </p>
    <p class="name">Mourad</p>
    <span class="position">Prof </span>
  </div>
  <div class="user-img" style="background-image: url()">
  </div>
</div>
</div>
<!-- <div class="item">
  <div class="testimony-wrap">
    <div class="text bg-light p-4">
     <span class="quote d-flex align-items-center justify-content-center">
      <i class="icon-quote-left"></i>
    </span>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <p class="name">Rodel Golez</p>
    <span class="position">Striper</span>
  </div>
  <div class="user-img" style="background-image: url(images/person_4.jpg)">
  </div>
</div>
</div> -->
<div class="item">
  <div class="testimony-wrap">
    <div class="text bg-light p-4">
     <span class="quote d-flex align-items-center justify-content-center">
      <i class="icon-quote-left"></i>
    </span>
    <p> Le technicien est venu à 21H pour réparer une fuite d’eau ! Il m’a sauvé la vie.</p>
    <p class="name">Oussama</p>
    <span class="position">Manager</span>
  </div>
  <div class="user-img" style="background-image: url()">
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- <section class="ftco-section bg-light">
 <div class="container">
  <div class="row justify-content-center mb-5 pb-2">
    <div class="col-md-8 text-center heading-section ftco-animate">
     <span class="subheading">Blog</span>
     <h2 class="mb-4">Recent Blog</h2>
     <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
   </div>
 </div>
 <div class="row">
  <div class="col-md-4 ftco-animate">
    <div class="blog-entry">
      <a href="blog-single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
        <div class="meta-date text-center p-2">
          <span class="day">07</span>
          <span class="mos">February</span>
          <span class="yr">2019</span>
        </div>
      </a>
      <div class="text pt-4">
        <h3 class="heading"><a href="#">Office of the Florida</a></h3>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <div class="d-flex align-items-center mt-4">
         <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
         <p class="ml-auto mb-0">
          <a href="#" class="mr-2">Admin</a>
          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
        </p>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 ftco-animate">
  <div class="blog-entry">
    <a href="blog-single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
      <div class="meta-date text-center p-2">
        <span class="day">07</span>
        <span class="mos">February</span>
        <span class="yr">2019</span>
      </div>
    </a>
    <div class="text pt-4">
      <h3 class="heading"><a href="#">Office of the Florida</a></h3>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      <div class="d-flex align-items-center mt-4">
       <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
       <p class="ml-auto mb-0">
        <a href="#" class="mr-2">Admin</a>
        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
      </p>
    </div>
  </div>
</div>
</div>
<div class="col-md-4 ftco-animate">
  <div class="blog-entry">
    <a href="blog-single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
      <div class="meta-date text-center p-2">
        <span class="day">07</span>
        <span class="mos">February</span>
        <span class="yr">2019</span>
      </div>
    </a>
    <div class="text pt-4">
      <h3 class="heading"><a href="#">Office of the Florida</a></h3>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      <div class="d-flex align-items-center mt-4">
       <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
       <p class="ml-auto mb-0">
        <a href="#" class="mr-2">Admin</a>
        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
      </p>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section> -->


@endsection


