

  <!-- Navbar -->
   <nav class="navbar navbar-expand-lg bg-success fixed-top navbar-transparent " color-on-scroll="400">
      <div class="container">
        <div class="dropdown button-dropdown">
          <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
            <span class="button-bar"></span>
            <span class="button-bar"></span>
            <span class="button-bar"></span>
          </a>
     
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
         
 
          </li>
 
          <li class="nav-item">
            <a class="nav-link" href="/admin"> {{ __('Admin') }}</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/vuformation"> {{ __('Liste Formations') }}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


