{{--
  this will be the skeleton page containing basic assets and scripts pages
  out of the application logic (
    home,
    about the project,
    etc ...
  )
  NOTE: THIS SKELETON IS STILL VALID FOR ALL PROJECT PAGES EVEN APP LOGIC RELATED
--}}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $title . $suffix }}</title>
    {{-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">     {{-- compiled from mix --}}
    @yield('styles')
  </head>
  <body>
    @yield('content')

    <script type="text/javascript" src="{{ asset('js/app.js') }}">

    </script>
    @yield('scripts')
  </body>
</html>
