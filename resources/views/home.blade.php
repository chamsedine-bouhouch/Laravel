@extends('template')
  <!-- Header include -->
  @section('contenu')

<div class="collapse navbar-collapse" id="ftco-nav">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item active"><a href="" class="nav-link pl-0">Acceuil</a></li>
    <li class="nav-item"><a href="services" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="about" class="nav-link">À Propos</a></li>
    <li class="nav-item"><a href="projects" class="nav-link">Projets</a></li>
    <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
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
        <h1 class="mb-4"> !تلوّج على فني صنايعي وثقة <span>Nos techniciens sont à votre sevice</span></h1>
        <h3 class="subheading">Un réseau de plus de 300 techniciens validés</h3>
        <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Demander un Devis</a></p>
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
      <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Demander un Devis</a></p>
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
      <span class="subheading">Vous êtes un Professionnel</span>
      <h3>Rejoignez AllooService</h3>
    </div>

    
              {!! Form::open(['route' => 'storePost']) !!}
                  <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
      {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => ' Nom']) !!}
      {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
    </div>
    <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
      {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => ' Prenom']) !!}
      {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
    </div>   
    <div class="form-group {!! $errors->has('numero') ? 'has-error' : '' !!}">
      {!! Form::text('numero', null, ['class' => 'form-control', 'placeholder' => ' Numéro']) !!}
      {!! $errors->first('numero', '<small class="help-block">:message</small>') !!}
    </div>

    <div class="form-group {!! $errors->has('service') ? 'has-error' : '' !!}">
      {!! Form::text('service', null, ['class' => 'form-control', 'placeholder' => ' Service']) !!}
      {!! $errors->first('service', '<small class="help-block">:message</small>') !!}
    </div>


   

  <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
    {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
    {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
  </div >
              {!! Form::submit('Postuler', ['class' => 'btn btn-info pull-right']) !!}
              {!! Form::close() !!}

</div>      
</div>
<!--  <div class="form-group {!! $errors->has('categorie') ? 'has-error' : '' !!}">
{!!Form::select('size', ['E' => 'Électricité', 'P' => 'Plomberie','C' => 'Climatisation', 'S' => 'Chauffage', 'A' => 'Autre'], null, ['placeholder' => 'Choisir votre catégorie '], ['class' => 'form-control form-control-lg']);!!}
</div> -->

    



























<div class="col-md-8 wrap-about py-5 ftco-animate">
 <div class="heading-section mb-5">
   <h2 class="mb-4">AllooService réunit tous les dépanneurs du bâtiment </h2>
 </div>
 <div class="">
   <p class="mb-5"> Nous vous presontons une plateforme complete de mise en relation entre demandeurs de service et les prestataires, le client sera accompagné dés le debut par nos conseillers en finissant par un techncien hautement qualifié et disponible dans les brefs delais.</p>
   <p><a href="#" class="btn btn-secondary px-5 py-3">Lire plus</a></p>
 </div>
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
       <a href="services.php"><span style="color:#fe4a49"  class="flaticon-plug" ></span></a>
     </div>
      </div>
      
     <div class="media-body p-2 mt-3">
      <h3 class="heading">Électricité</h3>
      <p>On offre des prestations pour tous vos besoins en électricité.</p>
    </div>
  </div>      
</div>
<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
  <div class="media block-6 d-block text-center">
     <div class="shadow p-3 mb-5 bg-white rounded">
    <div class="icon d-flex justify-content-center align-items-center">
      <a href="services.php"><span style="color:#fe4a49" class="flaticon-pipe"></span></a>
    </div>
</div>
    <div class="media-body p-2 mt-3">
      <h3 class="heading">Plomberie</h3>
      <p>Nos dépanneur sont à votre disposition pour toutes pannes et installations en plomberie.</p>
    </div>
  </div>    
</div>
<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
  <div class="media block-6 d-block text-center">
     <div class="shadow p-3 mb-5 bg-white rounded">
    <div class="icon d-flex justify-content-center align-items-center">
      <a href="services.php"><span style="color:#fe4a49" class="flaticon-air-conditioner"></span></a>
    </div>
</div>
    <div class="media-body p-2 mt-3">
      <h3 class="heading">Climatisation</h3>
      <p>Entretenir votre climatiseur ou demandez une nouvelle installation.</p>
    </div>
  </div>    
</div>
<div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
  <div class="media block-6 d-block text-center">
     <div class="shadow p-3 mb-5 bg-white rounded">
    <div class="icon d-flex justify-content-center align-items-center">
      <a href="services.php"><span style="color:#fe4a49" class="flaticon-heater"></span></a>
    </div>
</div>
    <div class="media-body p-2 mt-3">
      <h3 class="heading">Chauffage</h3>
      <p>Entretenir votre chaudière ou demandez une nouvelle installation.</p>
    </div>
  </div>      
</div>
</div>
</div>


<div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading"></span>
            
             <h2 class="mb-4">La qualité de service est notre priorité</h2>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="img/icon/stopwatch.png" alt="">>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Disponible </br> 24/7 </h3>
                <p>Notre réseau de techniciens est dispatché sur le grand Tunis et sont disponible meme pendant des heures tardives.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="img/icon/diploma.png" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Service de qualité</h3>
                <p>Nos techniciens sont bien sélectionner pour vous offrir la meilleur prestation.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="img/icon/shield.png" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Garantie assuré</h3>
                <p>Allo Service offre une garantie sur les interventions et un service de suivi à la hauteur de vos attentes.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <img src="img/icon/money-bag.png" alt="">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Transparence de prix</h3>
                <p>Plus de surprise sur les prix AllooService travail avec une grille tarifaire avec tous les techniciens.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
</section>
<!-- End  services -->


    <section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
     <div class="overlay"></div>
     <div class="container">
      <div class="row ">
       <div class="col-md-6 text-center">
        <h2>Pour faciliter votre dépannage</h2>
        <p>AllooService met à votre disposition des prosfessionels de qualité dans votre zone</p>
        <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3"> Mieux nous connaître</a></p>
      </div>
             <div class="col-md-6 text-center">
             <img src="images/work-1.jpg" class="img-fluid"  alt="Colorlib Template">
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
 <div class="row">
   <div class="col-md-6 col-lg-3 ftco-animate">
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
        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
    </div>
  </div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
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
      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
  </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
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
      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
  </div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="staff">
   <div class="img-wrap d-flex align-items-stretch">
    <div class="img align-self-stretch" style="background-image: url(images/team-4.jpg);"></div>
  </div>
  <div class="text pt-3 text-center">
    <h3>Naceur</h3>
    <span class="position mb-2">Electricien</span>
    <div class="faded">
     <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
     <ul class="ftco-social text-center">
      <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
  </div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
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
</section>
<section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
 <div class="container">
  <div class="row">
    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18 d-flex">
        <div class="text d-flex align-items-center">
          <strong class="number" data-number="30">0</strong>
        </div>
        <div class="text-2">
         <span>Years of <br>Experienced</span>
       </div>
     </div>
   </div>
   <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
    <div class="block-18 d-flex">
      <div class="text d-flex align-items-center">
        <strong class="number" data-number="1500">0</strong>
      </div>
      <div class="text-2">
       <span>Project <br>Successful</span>
     </div>
   </div>
 </div>
 <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
  <div class="block-18 d-flex">
    <div class="text d-flex align-items-center">
      <strong class="number" data-number="100">0</strong>
    </div>
    <div class="text-2">
     <span>Professional <br>Expert</span>
   </div>
 </div>
</div>
<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
  <div class="block-18 d-flex">
    <div class="text d-flex align-items-center">
      <strong class="number" data-number="300">0</strong>
    </div>
    <div class="text-2">
     <span>Happy <br>Customers</span>
   </div>
 </div>
</div>
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
         <p>Separated they live in. A small river named Duden flows</p>
       </div>
     </div>
     <div class="services-2 p-4 d-flex ftco-animate">
      <div class="icon">
       <span class="flaticon-engineer-1"></span>
     </div>
     <div class="text">
       <h3>Service Après Vente</h3>
       <p>Separated they live in. A small river named Duden flows</p>
     </div>
   </div>
   <div class="services-2 p-4 d-flex ftco-animate">
    <div class="icon">
     <span class="flaticon-engineer-2"></span>
   </div>
   <div class="text">
     <h3>24/7 Assistance Client</h3>
     <p>Separated they live in. A small river named Duden flows</p>
   </div>
 </div>
</div>
</div>
<div class="col-xl-1 d-xl-block d-none"></div>
<div class="col-md-6 col-lg-6 col-xl-7">
 <div class="heading-section ftco-animate mb-5">
  <span class="subheading"> Témoignage</span>
  <h2 class="mb-4">Clients Satisfaits</h2>
  <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
</div>
<div class="carousel-testimony owl-carousel">
  <div class="item">
    <div class="testimony-wrap">
      <div class="text bg-light p-4">
       <span class="quote d-flex align-items-center justify-content-center">
        <i class="icon-quote-left"></i>
      </span>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      <p class="name">Racky Henderson</p>
      <span class="position">Farmer</span>
    </div>
    <div class="user-img" style="background-image: url(images/person_1.jpg)">
    </div>
  </div>
</div>
<div class="item">
  <div class="testimony-wrap">
    <div class="text bg-light p-4">
     <span class="quote d-flex align-items-center justify-content-center">
      <i class="icon-quote-left"></i>
    </span>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <p class="name">Henry Dee</p>
    <span class="position">Businessman</span>
  </div>
  <div class="user-img" style="background-image: url(images/person_2.jpg)">
  </div>
</div>
</div>
<div class="item">
  <div class="testimony-wrap">
    <div class="text bg-light p-4">
     <span class="quote d-flex align-items-center justify-content-center">
      <i class="icon-quote-left"></i>
    </span>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <p class="name">Mark Huff</p>
    <span class="position">Students</span>
  </div>
  <div class="user-img" style="background-image: url(images/person_3.jpg)">
  </div>
</div>
</div>
<div class="item">
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
</div>
<div class="item">
  <div class="testimony-wrap">
    <div class="text bg-light p-4">
     <span class="quote d-flex align-items-center justify-content-center">
      <i class="icon-quote-left"></i>
    </span>
    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    <p class="name">Ken Bosh</p>
    <span class="position">Manager</span>
  </div>
  <div class="user-img" style="background-image: url(images/person_1.jpg)">
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="ftco-section bg-light">
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
</section>
@endsection


