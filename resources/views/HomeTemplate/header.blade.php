
    

<div class="bg-top navbar-light">
  <div class="container">
    <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center mt-1">
                  <a class="navbar-brand" href="/" class="d-flex">
                  <img src="images/logo-color.png" alt="mon logo" style="height:60px"/></a>
                </div>  
                <div class="col-lg-8 d-block">
                  <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                          <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                          <div class="text d-flex align-items-center">
                            <span>contact.darydar@gmail.com</span>
                            <!-- <a href=""></a> href="mailto:allooservice.contact@gmail.com">Send me an email</a> -->
                          </div>
                        </div>
                        
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                          <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                          <div class="text d-flex align-items-center">
                            <span> 52 369 586</span>
                          </div>
                        </div>
                        @guest
                        <div class="col-md topper d-flex align-items-center align-items-stretch">
                          <p class="mb-0 d-flex d-block">
                            @include('auth.login')

                            @include('auth.register')
                          
                        @else
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle btn btn-primary d-flex align-items-center justify-content-center " data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu">
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endguest
                          </p>
                        </div>
                  </div>
              </div>  
    </div>
  </div>   
 </div>

  
      