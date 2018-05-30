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
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>
