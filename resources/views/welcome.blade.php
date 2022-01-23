     <!DOCTYPE html>
       <html lang="en">

       <head>
         <meta charset="utf-8" />
         <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
         <link rel="icon" type="image/png" href="../assets/img/favicon.png">
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
         <title>
          Anbg
         </title>
         <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
         <!--     Fonts and icons     -->
         <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
         <!-- CSS Files -->
         <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
         <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />

         <link href="../assets/demo/demo.css" rel="stylesheet" />
       </head>

       <body class="landing-page sidebar-collapse">
         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
           <div class="container">


             <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">

               <ul class="navbar-nav">
                 @if (Route::has('login'))
                 <li class="nav-item">
                  @auth
                   <a class="nav-link"  href="{{ url('/dashboard') }}">Dashboard</a>
                   @else
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="{{ route('login') }}">Login</a>
                 </li>
                 <li class="nav-item">
                   @if (Route::has('register'))
                   <a class="nav-link" rel="tooltip" title="Register"  href="{{ route('register') }}"  >

                    Register
                   </a>
                   @endif
                                        @endauth
                 </li>
                   @endif
                 <li class="nav-item">

                 </li>
                 <li class="nav-item">

                 </li>
               </ul>
             </div>
           </div>
         </nav>
         <!-- End Navbar -->
         <div class="wrapper">
           <div class="page-header page-header-small">
             <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg6.jpg');">
             </div>
             <div class="content-center">
               <div class="container">
                 <h1 class="title">Agence  National de Bourse et Stage</h1>

               </div>
             </div>
           </div>

           <div class="section section-team text-center">
             <div class="container">
               <h2 class="title">Equipe de Calcul de Bourse</h2>
               <div class="team">
                 <div class="row">
                   <div class="col-md-4">
                     <div class="team-player">
                       <img src="../assets/img/avatar.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                       <h4 class="title">Romina Hadid</h4>
                       <p class="category text-primary">Model</p>
                       <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some

                     </div>
                   </div>
                   <div class="col-md-4">
                     <div class="team-player">
                       <img src="../assets/img/ryan.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                       <h4 class="title">Ryan Tompson</h4>
                       <p class="category text-primary">Designer</p>
                       <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                         <a href="#">links</a> for people to be able to follow them outside the site.</p>

                     </div>
                   </div>
                   <div class="col-md-4">
                     <div class="team-player">
                       <img src="../assets/img/eva.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                       <h4 class="title">Eva Jenner</h4>
                       <p class="category text-primary">Fashion</p>
                       <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                         <a href="#">links</a> for people to be able to follow them outside the site.</p>

                     </div>
                   </div>
                 </div>
               </div>
             </div>
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
