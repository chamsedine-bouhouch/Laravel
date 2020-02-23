@extends('HomeTemplate.structure')
@section('contenu')
    <br>
    <br>
    <br>

<div class="container">
        <div class="row">
                    <div class="col-lg-3">
                        <div style="border: solid  2px;">
                        <h1>Categorie</h1>
                            <ul>
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
                        <br>

                        <div style="border: solid  2px;">
                            <h1 >Type</h1>
                         <ul>
                                    <li class="mb-1"><a href="" class="d-flex"><span>Dépannage</span> <span class="text-black ml-auto">
                                    ({{count($services_db->where('type','depannage'))}}) </span></a></li>
                                     <li class="mb-1"><a href="" class="d-flex"><span>Installation</span> <span class="text-black ml-auto">({{count($services_db->where('type','installation'))}})</span></a></li>
                       </ul>     
                        </div>
                    </div>
                    <!-- div des Services-->
                    <div class="col-lg-9">
                        <div style="float:center">
                            <h2 class="text-black h5"> Nos services</h2>
                          </div>
                        
                          <div class="row mb-5">
             @if(count($services)>0)
             @foreach($services as $service)
             <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
              <div class="block-2 text-center border" style="width: 310px;height: 500px;">
                <figure class="block-4-image">
                  <a href="/serv{{$service->id}}">
                   <img src= "{{ asset('img/' .$service->image)}}" alt="Image placeholder" class="img-fluid rounded" 
                   style="width: 300px;height: 200px;">
                 </figure>
                 <div class="block-4-text p-4">
                  <h3><a href="/serv{{$service->id}}">{{$service->titre}}</a></h3>
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
                    </div>



        </div>


</div>    
<br>
<br><br>
@endsection