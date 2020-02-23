
    

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2 logo "><img src="images/logo-white.png" alt="mon logo" style="width:180px" class="mr-3" />  </a></h2>
            <p>DaryDar centralise tous les techniciens dans le secteur du bâtiment pour vous servir sur grand Tunis  .</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Services</h2>
            <ul class="list-unstyled">
              <li><a href="../services?categorie=electricite"><span class="ion-ios-arrow-round-forward mr-2"></span>Électricité</a></li>
              <li><a href="../services?categorie=plomberie"><span class="ion-ios-arrow-round-forward mr-2"></span>Plomberie</a></li>
              <li><a href="../services?categorie=climatisation"><span class="ion-ios-arrow-round-forward mr-2"></span>Climatisation</a></li>
              <li><a href="../services?categorie=chauffage"><span class="ion-ios-arrow-round-forward mr-2"></span>Chauffage</a></li>
             
            </ul>
          </div>
        </div>

        

        <div class="col-md-5">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2"> Articles Recents</h2>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Entretenir votre chaudière</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Feb. 07, 2018</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-5 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Réglage optimale de votre climatiseur</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> Feb. 07, 2018</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
            
   <div class="col-md">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Recevez nos nouvelles</h2>
            

   

            {!! Form::open(['route' => 'storeEmail']) !!}
             <div class="form-group {!! $errors->has('mailing') ? 'has-error' : '' !!}">
    {!! Form::text('mailing', null, ['class' => 'form-control', 'placeholder' => ' Votre Email']) !!}
    {!! $errors->first('mailing', '<small class="help-block"  style="color: #dc3545">:message</small>') !!}
  </div> 
            {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
            {!! Form::close() !!}



          </div>
      </div>
   
              <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
  
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
