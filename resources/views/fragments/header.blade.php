  <header class="">
      <div class="navbar">
        @if(strpos(request()->url(), '/movie/') !== false)
          <a href="/" class="">
            <span class="header-title">
              <ion-icon name="arrow-back-outline"></ion-icon>
              back
            </span>
          </ion-icon>
        @else
          <!--
            - menu button for small screen
          -->
          <button class="navbar-menu-btn">
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
          </button>
  
  
          <a href="#" class="navbar-brand">
            <span class="header-title">LuxFlix</span>
          </a>
  
          <!--
            - navbar navigation
          -->
  
          <nav class="">
            <ul class="navbar-nav">
  
              <li> <a href="/" class="navbar-link">Home</a> </li>
              <li> <a href="#category" class="navbar-link">Genre</a> 
              </li>
              @auth
                @if(auth()->user()->is_admin)
                  <li> <a href="/dashboard" class="navbar-link
                indicator">Dashboard</a> </li>
                @endif
              @else
                <li> <a href="#" class="navbar-link  indicator">Explore</a> </li>
              @endif
            </ul>
          </nav>
  
          <!--
            - search and sign-in
          -->
  
          <div class="navbar-actions">
  
            <form action="/search" class="navbar-form">
              <input type="text" name="search" placeholder="I'm looking for..." class="navbar-form-search">
  
              <button class="navbar-form-btn btn-red">
                <ion-icon name="search-outline"></ion-icon>
              </button>
  
              <div class="navbar-form-close">
                <ion-icon name="close-circle-outline"></ion-icon>
              </div>
            </form>
  
  
            <!--
              - search button for small screen
            -->
  
            <button class="navbar-search-btn search-cream">
              <ion-icon name="search-outline"></ion-icon>
            </button>
            
            @auth
              <form method="POST" action="{{ url('logout') }}" class="navbar-signin">
                @csrf
                @method('DELETE')
                <button class="nav-sign-in">Sign out</button>
                <ion-icon name="log-out-outline"></ion-icon>
              </form>
            @else
              <a href="/login" class="navbar-signin">
                <span class="nav-sign-in">Sign in</span>
                <ion-icon name="log-in-outline"></ion-icon>
              </a>
            @endif
  
          </div>
        @endif
      </div>
    </header>