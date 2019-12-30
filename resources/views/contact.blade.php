@extends('template')
@section('contenu')
<div class="collapse navbar-collapse" id="ftco-nav">
   <ul class="navbar-nav mr-auto">
    <li class="nav-item"><a href="./" class="nav-link pl-0">Acceuil</a></li>
    <li class="nav-item"><a href="services" class="nav-link">Demandez une Intervention </a></li>
<!--     <li class="nav-item "><a href="about" class="nav-link">À Propos</a></li>
    <li class="nav-item"><a href="projects" class="nav-link">Projets</a></li>
    <li class="nav-item "><a href="blog" class="nav-link">Blog</a></li> -->
    <li class="nav-item active"><a href="contact" class="nav-link">Contact</a></li>
  </ul>
</div>
</nav>
<!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contactez Nous</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="./" >Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
           
						{!! Form::open(['url' => 'contact']) !!}
          <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
            {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
            {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="form-group {!! $errors->has('numero') ? 'has-error' : '' !!}">
            {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Votre Prenom']) !!}
            {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
          </div>


          <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
            {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
            {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
          </div>
          {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
        {!! Form::close() !!}
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Nos coordonnés </h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Addresse:</span> Av. de la Liberté, la Marsa 2078, TUNIS</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">52 369 586</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">allooservice@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><span>Siteweb:</span> <a href="#">allooservice.tn</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
@endsection