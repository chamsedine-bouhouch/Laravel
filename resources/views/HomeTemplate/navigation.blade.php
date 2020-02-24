  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center ">
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <!-- Search form -->


      
       <form action="#" class="searchform order-lg-last">
        <div class="form-group d-flex active-cyan-3 active-cyan-4">
          <input type="text" class="form-control pl-3" placeholder="Que cherchez vous?">
          <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>


        </div>

      </form>  


     
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-3">
         <li class="nav-item  ">
           <a class="" href="" class="">
          <img src="images/logo-white.png" alt="mon logo" style="height:30px"/></a></li>
              @guest
              <li class="nav-item "><a href="/" class="nav-link pl-3">Acceuil</a></li>
              <li class="nav-item"><a href="/services" class="nav-link pl-3">Demandez une Intervention</a></li>
              <li class="nav-item"><a href="/contact" class="nav-link pl-3">Contact</a></li>
              @else    
              <li class="nav-item "><a href="/" class="nav-link pl-3">Acceuil</a></li>
              <li class="nav-item"><a href="/services" class="nav-link pl-3">Demandez une Intervention</a></li>
              <li class="nav-item"><a href="/contact" class="nav-link pl-3">Contact</a></li>
              <li class="nav-item"><a href="/listUser" class="nav-link">Users</a></li>
              <li class="nav-item"><a href="projects" class="nav-link">Projets</a></li>
              <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>

              @endguest
              
     
        </ul>

      </div>
     
      <!--    <li class="nav-item"><a href="about" class="nav-link">À Propos</a></li>
         <li class="nav-item"><a href="projects" class="nav-link">Projets</a></li>
         <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li> -->
    </div>

 </nav>
