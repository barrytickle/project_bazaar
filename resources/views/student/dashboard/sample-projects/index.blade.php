@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>You are previewing sample projects. All projects below are small samples of how to compose each section of your dissertation.</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">Project samples</span></p>
    </div>
    <div class="main-body">
      <div class="text--group">
        <h1>Project Samples</h1>
        <p>All of the project samples below are small fragments of what should be expected for each project, *Note this is not the full amount of content which should be expected, as your dissertation project will be on a much larger scale.</p>
        <ul class="sample--list">
          @foreach($blog as $blogs)
            <li><a href="/student/dashboard/sample-projects/{{$blogs->slug}}"><span>{{$blogs->blog_title}}</span> <img src="/images/icons/arrow-right-circle.svg"></a> </li>
          @endforeach
        </ul>
      </div>
    </div>
  @endsection
@endsection
