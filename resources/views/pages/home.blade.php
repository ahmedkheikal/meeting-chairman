@extends('templates.skeleton')

@section('styles') @endsection

@section('content')
  @include('sections.header')
  <div class="cover">
    <img src="{{ asset('images/main-cover.jpg') }}" alt="">
    <div class="first-headline">
      <h2>{{env('APP_NAME')}}</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <div class="container">

    <div class="features">
      <div class="row">
        <div class="col-md-4">
          <h4>Mange your meetings</h4>
        </div>
        <div class="col-md-4">
          <h4>Organize meeting by allowing speech for each participant</h4>

        </div>
        <div class="col-md-4">
          <h4>Rate meetings and team members</h4>

        </div>
      </div>
    </div>
  </div>


  @include('sections.footer')
@endsection

@section('scripts') @endsection
