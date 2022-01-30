

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

       <body class="landing-page sidebar-collapse">
         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg bg-success fixed-top navbar-transparent " color-on-scroll="400">
           <div class="container">
     
           <div class="navbar-translate  ">

<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-bar top-bar"></span>
  <span class="navbar-toggler-bar middle-bar"></span>
  <span class="navbar-toggler-bar bottom-bar"></span>
</button>
</div>
</div>
</div>
<div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">

<ul class="navbar-nav">
               <li class="nav-item">
                
                   <a class="nav-link"  href="{{ url('/formationlibre') }}"><b>Formations</b></a>
                  
                 </li>
                @if (Route::has('login'))
                 <li class="nav-item">
                  @auth
                   <a class="nav-link"  href="{{ url('/dashboard') }}"><b>Dashboard</b></a>
                   @else
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ route('login') }}">Login</a>
                 </li>
                 <li class="nav-item">
                   @if (Route::has('welcome'))
                   <a class="nav-link" rel="tooltip" title="accueil"  href="/">
<b>Accueil</b>
                   </a>
                   @endif
                                        @endauth
                 </li>
                   @endif
               </ul>
</div>

</nav>
<br/>
<br/>
<br/>
<div  class="carousel" >
<div class="card text-center">


 
  <video width="400" controls class="card">
  <source src="video/1.mp4" type="video/mp4">
  <source src="video/1.mp4" type="video/ogg">

</video>
<button class="btn btn-success" data-toggle="modal" data-target="#myModal1">
                Audio
              </button>
<div class="modal fade modal-mini modal-success" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <div class="modal-profile">
              <i class="now-ui-icons media-2_note-03"></i>
            </div>
          </div>

          <div class="modal-body justify-content-center">
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
</div>
</div>

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
         <style>
body {
  background-image: url("../../../assets/img/bg4.jpg");
  background-repeat: no-repeat;
  background-size: cover auto;
  
}

  </style>
</body>
</html>