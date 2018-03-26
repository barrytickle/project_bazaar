@extends('templates.master')
@section('title', 'Test')
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
        {!! Form::open(['url' => '/staff/dashboard/degrees', 'autocomplete' => 'off']) !!}
          {!!Form::label('name', 'Your Title *') !!}
          {!!Form::text('name', null, ['placeholder' => 'e.g. BSc Hons Web Design And Development']) !!}
          {!!Form::submit('Add Degree', null, ['class' => 'btn']) !!}
         {!! Form::close() !!}
      </div>
    </div>



  @endsection
@endsection
