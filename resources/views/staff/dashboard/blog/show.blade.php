@extends('templates.master')
@section('title', $sample->blog_title)
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Showing Blog: {{$sample->blog_title}}</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display"><a href="/student/dashboard">Home</a> > <a href="/student/dashboard/blog">Learn what a project is</a> > {{$sample->blog_title}}</span></p>
    </div>
    <div class="main-body">
      <div class="text--group">
        <h1>{{$sample->blog_title}}</h1>
        <p>{{$sample->blog_content}}</p>
      </div>
    </div>
  @endsection
@endsection
