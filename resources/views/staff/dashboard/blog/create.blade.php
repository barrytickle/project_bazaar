@extends('templates.master')
@section('title', 'Staff Area | Create a blog | Project Bazaar')
@section('content')
  @extends('templates.staffdashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Create a new blog post</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">Create your blog post</span></p>
    </div>
    <div class="main-body">
      <div class="text--group">
        <h1>Create a new blog post</h1>
        <h2>Blog Details</h2>
        {!! Form::open(['url' => '/staff/dashboard/blog', 'autocomplete' => 'off']) !!}
          {!!Form::label('blog_title', 'Your Title *') !!}
          {!!Form::text('blog_title', null, ['placeholder' => 'e.g. What is a dissertation project?']) !!}
          {!!Form::label('type', 'Which pathway best suits this project?') !!}
          <select name="type" id="type">
            @foreach($types as $type)
              <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
          </select>
          {!!Form::label('blog_content', 'Blog Content') !!}
          {!!Form::textarea('blog_content', null, ['placeholder' => "This is where the main body of your blog will go"])!!}

          {!!Form::submit('Submit Blog', null, ['class' => 'btn']) !!}
         {!! Form::close() !!}
      </div>
    </div>



  @endsection
@endsection
