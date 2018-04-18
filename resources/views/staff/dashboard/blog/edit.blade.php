@extends('templates.master')
@section('title', 'Staff Area | Edit a blog post | Project Bazaar')
@section('content')
  @extends('templates.staffdashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Edit {{$blog->blog_title}}</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">Edit your blog post</span></p>
    </div>
    <div class="main-body">
      <div class="text--group">
        <h1>Edit: {{$blog->blog_title}}</h1>
        <h2>Blog Details</h2>
        {!! Form::model($blog, ['method' => 'PATCH', 'url' => 'staff/dashboard/blog/'. $blog->id]) !!}
          {!!Form::label('blog_title', 'Your Title *') !!}
          {!!Form::text('blog_title', $blog->blog_title) !!}
          {!!Form::label('blog_slug', 'Alter Slug') !!}
          {!!Form::text('blog_slug', $blog->slug) !!}
          {!!Form::label('type', 'Which type suits this blog post?') !!}
          <select name="type" id="type">
            @foreach($type as $types)
              @if($types->id == $blog->type)
                <option value="{{$types->id}}" selected>{{$types->name}}</option>
              @else
                <option value="{{$types->id}}">{{$types->name}}</option>
              @endif
            @endforeach
          </select>
          {!!Form::label('description', 'Project brief') !!}
          {!!Form::textarea('description', $blog->blog_content)!!}

          {!!Form::submit('Update blog', null, ['class' => 'btn']) !!}
         {!! Form::close() !!}
      </div>
    </div>



  @endsection
@endsection
