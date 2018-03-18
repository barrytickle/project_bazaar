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
        {!! Form::open(['autocomplete' => 'off']) !!}
          {!!Form::label('project_title', 'Your Title *') !!}
          {!!Form::text('project_title', null, ['placeholder' => 'e.g. Project Bazaar']) !!}
          {!!Form::label('degree', 'Which pathway best suits this project?') !!}
          <select>
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
    <div class="modal-overlay">
      <div class="modal">

        <a class="close-modal">
          <svg viewBox="0 0 20 20">
            <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg>
        </a><!-- close modal -->

        <div id="modal--content"></div>

      </div>
    </div>


  @endsection
@endsection
