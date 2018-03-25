@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Create your own project</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">Create your own project</span></p>
    </div>
    <div class="main-body">
      <div class="text--group">
        <h1>Create your own project</h1>
        <p>Now it's your time to shine, proposing your own project scope couldn't be any easier. Simply fill out the form below, this will then need to be proposed by your tutor before being visible to all users throughout the system.</p>

        <h2>Project Details</h2>
        {!! Form::open(['url' => '/student/dashboard/projects', 'autocomplete' => 'off']) !!}
          {!!Form::label('project_title', 'Your Title *') !!}
          {!!Form::text('project_title', null, ['placeholder' => 'e.g. Project Bazaar']) !!}
          {!!Form::label('degree', 'Which pathway best suits this project?') !!}
          <select name="degree" id="degree">
            @foreach($degree as $deg)
              <option value="{{$deg->id}}">{{$deg->name}}</option>
            @endforeach
          </select>
          {!!Form::label('description', 'Project brief') !!}
          {!!Form::textarea('description', null, ['placeholder' => "Tell us a bit about your project, this doesn't have to be formal... Just explain your idea in your own words."])!!}

          {!!Form::submit('Propose Project', null, ['class' => 'btn']) !!}
         {!! Form::close() !!}
      </div>
    </div>
>


  @endsection
@endsection
