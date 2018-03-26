@extends('templates.master')
@section('title', 'Student Area | {{$sample->blog_title}} | Project Bazaar')
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Showing Sample: {{$sample->blog_title}}</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display"><a href="/student/dashboard">Home</a> > <a href="/student/dashboard/sample-projects">Sample Projects</a> > {{$sample->blog_title}}</span></p>
    </div>
    <div class="main-body">
      <div class="text--group">
        <h1>{{$sample->blog_title}}</h1>
        <p>{{$sample->blog_content}}</p>
      </div>
    </div>
  @endsection
@endsection
