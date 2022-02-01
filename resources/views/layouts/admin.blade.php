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
   body {
  background-image: url("../../../assets/img/bg4.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>

</head>

<body class="profile-page sidebar-collapse">

@extends('layouts.baradmin')
@yield('admin')
<br/>
<br/>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <h4 class="title text-center">Formations Administrateurs</h4>
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
          <h4 class="title text-center">Ajouter une formation</h4>
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('titre')" />

                <x-input id="email" class="form-control" type="text" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-2">
                <x-label for="password" :value="__('Description')" />

                <x-input id="password" class="form-control"
                                type="text"
                                name="description"
                                required autocomplete="current-password" />
            </div>
            <div class="mt-2">
                <x-label for="password" :value="__('Video Descriptive')" />

                <x-input id="password" class="form-control"
                                type="file"
                                name="description"
                                required autocomplete="current-password" />
            </div>
            <!-- Remember Me -->
            <br/>
            <br/>
           

            <div class="flex items-center justify-end mt-2">
              

                <x-button class="btn btn-success btn-round btn-lg btn-block">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal1">Audio</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
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
