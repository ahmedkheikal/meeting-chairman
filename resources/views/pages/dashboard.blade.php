{{--
    this page contains account overview (
        teams
        meetings -> related to teams
        linked users ( users with common teams )

    )
--}}

@extends('templates.skeleton')

@section('styles')
    <link rel="stylesheet" href="{!! asset('css/dashboard.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/peopleList.css') !!}">
@endsection

@section('content')
    @include('sections.header')
        <div class="container-fluid mt-4 mb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            @lang('titles.teams', ['variable' => 'replacement'])
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a data-toggle="modal" data-target="#teamInfoPopup" href="#">
                                    Team 1
                                </a>
                            </li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            @lang('titles.meetings')
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="/meeting">
                                    Meeting 1
                                </a>
                            </li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            @lang('titles.peopleYouKnow')
                        </div>
                        <ul class="people-you-know list-group list-group-flush">
                            <li class="list-group-item"><img src="{{ asset('images/profile.png') }}" alt="">Cras justo odio</li>
                            <li class="list-group-item"><img src="{{ asset('images/placeholders/profile-pictires/Brandie-Chapman.jpg') }}" alt="">Brandie Chapman</li>
                            <li class="list-group-item"><img src="{{ asset('images/placeholders/profile-pictires/Darryl-Jennings.jpg') }}" alt="">Darryl Jennings</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @include('sections.footer')
    <!-- Modal -->
    <div class="modal fade" id="teamInfoPopup" tabindex="-1" role="dialog" aria-labelledby="teamInfoPopupLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="teamInfoPopupLabel">Team name</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              this poppup will contain team info {
                  name ,
                  description ,
                  logo ,
                  meetings ,
                  members
              }
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
@endsection
