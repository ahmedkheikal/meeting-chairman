@extends('templates.skeleton')

@section('metadata')
    <meta name="theme-color" content="#f44235">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/meeting.css') }}">
    <link rel="stylesheet" href="{{ asset('css/peopleList.css') }}">
@endsection

@section('content')
@include('sections.header')
    <div class="container-fluid">
        <div class="row">
            <div class="offset-sm-3 col-sm-6">
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        @lang('titles.participants')
                    </div>
                    <ul class="people-you-know list-group list-group-flush">
                        <li class="list-group-item"><img src="{{ asset('images/profile.png') }}" alt="">Cras justo odio</li>
                        <li class="list-group-item"><img src="{{ asset('images/placeholders/profile-pictires/Brandie-Chapman.jpg') }}" alt="">Brandie Chapman</li>
                        <li class="list-group-item"><img src="{{ asset('images/placeholders/profile-pictires/Darryl-Jennings.jpg') }}" alt="">Darryl Jennings</li>
                        <li class="list-group-item"><img src="{{ asset('images/placeholders/profile-pictires/Darryl-Jennings.jpg') }}" alt="">Darryl Jennings</li>
                        <li class="list-group-item"><img src="{{ asset('images/placeholders/profile-pictires/Darryl-Jennings.jpg') }}" alt="">Darryl Jennings</li>
                        <li class="list-group-item"><img src="{{ asset('images/placeholders/profile-pictires/Darryl-Jennings.jpg') }}" alt="">Darryl Jennings</li>
                        <li class="list-group-item"><img src="{{ asset('images/placeholders/profile-pictires/Darryl-Jennings.jpg') }}" alt="">Darryl Jennings</li>
                        <li class="list-group-item"><img src="{{ asset('images/placeholders/profile-pictires/Darryl-Jennings.jpg') }}" alt="">Darryl Jennings Darryl Jennings Darryl Jennings</li>
                        <li class="list-group-item"><img src="{{ asset('images/placeholders/profile-pictires/Darryl-Jennings.jpg') }}" alt="">Darryl Jennings</li>
                    </ul>
                </div>
            </div>
            <div class="speech-status offset-sm-4 col-sm-4">
                <img class="mic-image" src="{{ asset('images/off-mic.png') }}" alt="">
                <h5>@lang('titles.speechOff')</h5>
                <p style="font-size: 13px">@lang('titles.dontTalk')</p>
                <button type="button" class="raise-hand">@lang('titles.raiseHand')</button>
            </div>
        </div>
    </div>
@include('sections.footer')
@endsection

@section('scripts')
    <script type="text/javascript">
    </script>
@endsection
