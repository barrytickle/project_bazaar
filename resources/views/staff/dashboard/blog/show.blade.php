@extends('templates.master')
@section('title', $sample->blog_title)
@section('content')
  @extends('templates.staffdashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Showing Blog: {{$sample->blog_title}}</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display"><a href="/staff/dashboard">Home</a> > <a href="/staff/dashboard/blog">Manage a blog</a> > Preview >   {{$sample->blog_title}}</span></p>
    </div>
    <div class="main-body">
      <div class="text--group">
        <h1>{{$sample->blog_title}}</h1>
        <p>{{$sample->blog_content}}</p>
      </div>
    </div>
  @endsection
@endsection
