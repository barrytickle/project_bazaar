@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Showing Project: {{$project->project_name}}</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">{{$project->project_name}}</span></p>
    </div>
    <div class="main-body">
      <div class="dashboard--right">
        <div class="element--like">
          @if($like > 0)
          <i class="press" data-slug="{{$project->project_slug}}" data-user="{{Auth::user()->student->student_id}}"></i>
          @else
          <i data-slug="{{$project->project_slug}}" data-user="{{Auth::user()->student->student_id}}"></i>
          @endif
        </div>
      </div>
      <div class="text--group">
        <h1>{{$project->project_name}}</h1>
        <h3>Developed by: {{$project->student->student_id}}</h3>

        <p>{{$project->project_description}}</p>
      </div>
    </div>
    <div class="modal-overlay">
      <div class="modal">

        <a class="close-modal">
          <svg viewBox="0 0 20 20">
            <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg>
        </a><!-- close modal -->

        <div id="modal--content"></div>

      </div>
    </div>


  @endsection
@endsection
