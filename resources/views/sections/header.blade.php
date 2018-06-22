<header>
  {{-- <nav class="navbar sticky-top navbar-light bg-light"> --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MainNavBar" aria-controls="MainNavBar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="MainNavBar">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item {{$suffix == ' |  About' ? 'active' : ''}}">
          <a class="nav-link" href="/about">About the project</a>
        </li>
        <li class="nav-item {{$suffix == ' |  Contact Us' ? 'active' : ''}}">
          <a class="nav-link" href="/contact-us">Contact us</a>
        </li>
        @guest
        @else
            <li class="nav-item {{$suffix == ' |  Dashboard' ? 'active' : ''}}">
                <a class="nav-link" href="/dashboard">dashboard</a>
            </li>
        @endguest
      </ul>
      <form class="form-inline my-2 my-lg-0">
          <ul class="navbar-nav mr-auto">
              @guest
                  <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                  <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @else
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="/account-settings#">Account Settings</a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
          </ul>
      </form>
    </div>
  </nav>
</header>
