@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>You are previewing all blog posts, all posts have been wrote by the tutors which are available to the system.</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">Learn what a project is</span></p>
    </div>
    <div class="main-body">
      <div class="dashboard--right">
        <span>Total Articles: {{$count}} </span>
      </div>
      <div class="text--group">
        <h1>The fundamentals of a project</h1>
        <p>The following blog posts will allow you to learn about a project, providing you with the essential guidelines you need to excel your dissertation.</p>
        <div class="blog--list">
          @foreach($blog as $blogs)
            <div class="blog">
              <h2>{{$blogs->blog_title}}</h2>
              <p>
                <?php echo substr($blogs->blog_content, 0, 180) . '...'; ?>
              </p>
                <a href="/student/dashboard/blog/{{$blogs->slug}}"><span>Continue reading</span> <img src="/images/icons/arrow-right-circle.svg"></a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  @endsection
@endsection
