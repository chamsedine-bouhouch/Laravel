@extends('templateServices')
@section('contenu')



<div class="collapse navbar-collapse" id="ftco-nav">
 <ul class="navbar-nav mr-auto">
  <li class="nav-item "><a href="./" class="nav-link pl-0">Acceuil</a></li>
  <li class="nav-item active"><a href="services" class="nav-link">Demandez une Intervention</a></li>
<!--   <li class="nav-item"><a href="about" class="nav-link">À Propos</a></li>
  <li class="nav-item"><a href="projects" class="nav-link">Projets</a></li>
  <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li> -->
  <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
</ul>
</div>
</nav>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Services</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="./">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<!-- Site start-->
<!-- Latest & refference select -->
<div class="site-section">
  <div class="container">
    <div class="row mb-5">


      <div class="col-md-3 order-1 mb-5 mb-md-0">

        <!-- Categoies filter -->

        <div class="border p-4 rounded mb-4">
          <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
          <ul class="list-unstyled mb-0">
            <li class="mb-1"><a href="services" class="d-flex"><span>Tous</span> <span class="text-black ml-auto">
            ({{count($services_db)}})</span></a></li>
            <li class="mb-1"><a href="services?categorie=electricite" class="d-flex"><span>Electricité</span> <span class="text-black ml-auto">({{count($services_db->where('categorie','electricite'))}})</span></a></li>
            <li class="mb-1"><a href="services?categorie=plomberie" class="d-flex"><span>Plomberie</span> <span class="text-black ml-auto">
              ({{count($services_db->where('categorie','plomberie'))}})</span></a></li>
              <li class="mb-1"><a href="services?categorie=chauffage" class="d-flex"><span>Chauffage</span> <span class="text-black ml-auto">
               ({{count($services_db->where('categorie','chauffage'))}})</span></a></li>
               <li class="mb-1"><a href="services?categorie=climatisation" class="d-flex"><span>Climatisation</span> <span class="text-black ml-auto">
                ({{count($services_db->where('categorie','climatisation'))}})</span></a></li>
              </ul>
            </div>

            <!-- Type filter -->

            <div class="border p-4 rounded mb-4">
              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Type</h3>
                <ul class="list-unstyled mb-0">
                  <li class="mb-1"><a href="{{route('services.index', ['categorie' => request('categorie'), 'type' => 'depannage'])}}" class="d-flex"><span>Dépannage</span> <span class="text-black ml-auto">
                    ({{count($services_db->where('type','depannage'))}}) </span></a></li>
                    <li class="mb-1"><a href="{{route('services.index', ['categorie' => request('categorie'), 'type' => 'installation'])}}" class="d-flex"><span>Installation</span> <span class="text-black ml-auto">({{count($services_db->where('type','installation'))}})</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!--  -->
            <div class="col-md-9 order-2">
              <div class="row">
                <div class="col-md-12 mb-5">
                  <div class="float-md-left mb-4">
                    <h2 class="text-black h5"> Nos services</h2>
                  </div>
                  <div class="d-flex">
                    <div class="dropdown mr-1 ml-md-auto">
                      <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Récent
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="index.blade.php?categorie=electricite">Electricité</a>
                      <a class="dropdown-item" href="#">Plomberie</a>
                      <a class="dropdown-item" href="#">Climatisation</a>
                      <a class="dropdown-item" href="#">Chauffage</a>
                    </div>
                  </div>
    <!--               <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference"
                    data-toggle="dropdown"> </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>

            <!-- Services Display -->

            <div class="row mb-5">
             @if(count($services)>0)
             @foreach($services as $service)
             <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
              <div class="block-4 text-center border">
                <figure class="block-4-image">
                  <a href="services/{{$service->id}}">
                   <img src= "{{ asset('img/' .$service->image)}}" alt="Image placeholder" class="img-fluid rounded">
                 </figure>
                 <div class="block-4-text p-4">
                  <h3><a href="services/{{$service->id}}">{{$service->titre}}</a></h3>
                  <p class="mb-0">{{$service->description}}</p>
                  <p class="text-primary font-weight-bold">{{$service->prix}}DT</p>
                </div>
              </div>
            </div>
            @endforeach 
          </div>


          <!-- Pagination with laravel -->

          <div class="row" data-aos="fade-up">
            <div class="col-md-12 text-center">
             <div class="site-block-27">
               {{$services->links()}}
             </div>
           </div>
         </div>
         @else
         <p>No Data</p>    
         @endif 


        <!--   // Pagination 
          <div class="row" data-aos="fade-up">
            <div class="col-md-12 text-center">
              <div class="site-block-27">
                <ul>
                  <li><a href="#">&lt;</a></li>
                  <li class="active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&gt;</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->




        </div>
      </div>
    </div>
  </div>


  @endSection