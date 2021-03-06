<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
 Langues
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />

  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
audio{
    width: 180px;
}

</style>
</head>

<body class="profile-page sidebar-collapse">
  <!-- Navbar -->
   <nav class="navbar navbar-expand-lg bg-success fixed-top navbar-transparent " color-on-scroll="400">
      <div class="container">
        <div class="dropdown button-dropdown">
          <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
            <span class="button-bar"></span>
            <span class="button-bar"></span>
            <span class="button-bar"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-header">Formation aux Langues</a>
            <a class="dropdown-item" href="#">Fang</a>
            <a class="dropdown-item" href="#">Nzebie</a>
            <a class="dropdown-item" href="#">Benga</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Sekianie</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Ndoumou</a>
          </div>
        </div>
        <div class="navbar-translate">

          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar top-bar"></span>
            <span class="navbar-toggler-bar middle-bar"></span>
            <span class="navbar-toggler-bar bottom-bar"></span>
          </button>
        </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
             <form method="POST" action="{{ route('logout') }}">
                                      @csrf
          <a class="nav-link"  :href="route('logout')"
  onclick="event.preventDefault();this.closest('form').submit();">
               {{ __('Log Out') }}</a></form>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="/actualite"> {{ __('Actualiter') }}</a>
          </li>
         
 <li class="nav-item">
            <a class="nav-link" href="/"> {{ __('Welcome') }}</a>
          </li>
          </li>
 <li class="nav-item">
            <a class="nav-link" href="/"> {{ __('Formation') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin"> {{ __('Admin') }}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter page-header-small" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('../assets/img/bg5.jpg');">
      </div>
      <div class="container">
        <div class="photo-container">
          <img src="../assets/img/rya.jpg" alt="">
        </div>
        <h3 class="title">{{ Auth::user()->name }}</h3>
        <p class="category">informaticien</p>
        <div class="content">
          <div class="social-description">
            <h2>26</h2>

          </div>
          <div class="social-description">
            <h2>26</h2>

          </div>
          <div class="social-description">
            <h2>48</h2>

          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="button-container">
          <a href="#button" class="btn btn-success btn-round btn-lg">Follow</a>
          <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Twitter">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
        <h3 class="title">About me</h3>
        <h5 class="description">An artist of considerable range, Ryan ??? the name taken by Melbourne-raised, Brooklyn-based Nick Murphy ??? writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</h5>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <h4 class="title text-center">Formations</h4>
            <div class="nav-align-center">
              <ul class="nav nav-pills nav-pills-success nav-pills-just-icons" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#profile" role="tablist">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tablist">
                    <i class="now-ui-icons sport_trophy"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#messages" role="tablist">
                    <i class="now-ui-icons sport_user-run"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content gallery">
            <div class="tab-pane active" id="home" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                  <a class="btn btn-success" data-toggle="modal" data-target="#myModal">
                  <img src="../assets/img/bg1.jpg" alt="" class="img-raised">
</a>
              <a class="btn btn-success" data-toggle="modal" data-target="#myModal">
              <img src="../assets/img/bg3.jpg" alt="" class="img-raised">
</a>
               
                  </div>
                  <div class="col-md-6">
                  <a class="btn btn-success" data-toggle="modal" data-target="#myModal">
                    <img src="../assets/img/bg8.jpg" alt="" class="img-raised"></a>
                    <a class="btn btn-success" data-toggle="modal" data-target="#myModal"> 
                      <img src="../assets/img/bg7.jpg" alt="" class="img-raised"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                  <a class="btn btn-success" data-toggle="modal" data-target="#myModal"><img src="../assets/img/bg6.jpg" class="img-raised">
                  </a> 
                  <a class="btn btn-success" data-toggle="modal" data-target="#myModal"><img src="../assets/img/bg11.jpg" alt="" class="img-raised"></a>
                  </div>
                  <div class="col-md-6">
                  <a class="btn btn-success" data-toggle="modal" data-target="#myModal"><img src="../assets/img/bg7.jpg" alt="" class="img-raised"></a>
                  <a class="btn btn-success" data-toggle="modal" data-target="#myModal"><img src="../assets/img/bg8.jpg" alt="" class="img-raised"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="messages" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                  <a class="btn btn-success" data-toggle="modal" data-target="#myModal"> <img src="../assets/img/bg3.jpg" alt="" class="img-raised"></a>
                  <a class="btn btn-success" data-toggle="modal" data-target="#myModal"><img src="../assets/img/bg8.jpg" alt="" class="img-raised"></a>
                  </div>
                  <div class="col-md-6">
                  <a class="btn btn-success" data-toggle="modal" data-target="#myModal"><img src="../assets/img/bg7.jpg" alt="" class="img-raised"></a>
                  <a class="btn btn-success" data-toggle="modal" data-target="#myModal"><img src="../assets/img/bg6.jpg" class="img-raised"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <!-- Sart Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        
          
         
          <div class="modal-body">
          <video width="400" controls class="card">
  <source src="video/1.mp4" type="video/mp4">
  <source src="video/1.mp4" type="video/ogg">

</video>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal1">Audio</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
        <!-- Mini Modal -->
        <div class="modal fade modal-mini modal-success" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <div class="modal-profile">
              <i class="now-ui-icons users_circle-08"></i>
            </div>
          </div>
          <div class="modal-body">
          <audio controls >
  <source src="mp3/1.mp3" type="audio/ogg">
  <source src="mp3/1.mp3" type="audio/mpeg">
</audio>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link btn-neutral">Back</button>
            <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    <footer class="footer footer-default">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>
