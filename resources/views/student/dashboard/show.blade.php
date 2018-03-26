@extends('templates.master')
@section('title', 'Student Area | Showing project {{$project->project_name}} | Project Bazaar')
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



  @endsection
@endsection
