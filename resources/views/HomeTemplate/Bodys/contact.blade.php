
@extends('HomeTemplate.structure')
@section('contenu')
    


  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
          <div class="container">
          @if ($message = Session::get('success'))
<div class="alert alert-success">
 <p> {{ $message }} </p>
</div>
@endif
              <div class="row d-flex align-items-stretch no-gutters justify-content-center">
                  <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
         <h2 class=" justify-content-center"> Laissez-nous un message</h2>
                      {!! Form::open(['url' => 'contact']) !!}
        <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
          {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
          {!! $errors->first('nom', '<small class="help-block" style="color: #dc3545">:message</small>') !!}
        </div>
        <div class="form-group {!! $errors->has('numero') ? 'has-error' : '' !!}">
          {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Votre Prenom']) !!}
          {!! $errors->first('prenom', '<small class="help-block" style="color: #dc3545">:message</small>') !!}
        </div>
        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
          {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
          {!! $errors->first('email', '<small class="help-block" style="color: #dc3545">:message</small>') !!}
        </div>


        <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
          {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
          {!! $errors->first('texte', '<small class="help-block" style="color: #dc3545">:message</small>') !!}
        </div>
        {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
      {!! Form::close() !!}
                  </div>
        
              <!-- 	<div class="col-md-6 d-flex align-items-stretch">
                      <div id="map"></div>
                  </div> -->
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
              <p><span>Addresse:</span> <br> La Marsa 2078, TUNIS</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <p><span>Phone:</span> <br><a href="tel://+21652369589"> +216 52 369 586</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <p><span>Email:</span> <a href="mailto:contact.darydar@gmail.com">contact.darydar@gmail.com</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light d-flex align-self-stretch box p-4">
              <p><span>Siteweb:</span> <br><a href="./">www.darydar.tech</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>
  @endsection