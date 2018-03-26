@extends('templates.master')
@section('title', 'Student Area | Edit {{$project->project_name}} | Project Bazaar')
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Edit {{$project->project_name}}</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">Edit your own project</span></p>
    </div>
    <div class="main-body">
      <div class="text--group">
        <h1>Edit: {{$project->project_name}}</h1>
        <p>{{$project->project_description}}</p>

        <h2>Project Details</h2>
        {!! Form::model($project, ['method' => 'PATCH', 'url' => 'student/dashboard/projects/'. $project->id]) !!}
          {!!Form::label('project_title', 'Your Title *') !!}
          {!!Form::text('project_title', $project->project_name, ['placeholder' => 'e.g. Project Bazaar']) !!}
          {!!Form::label('degree', 'Which pathway best suits this project?') !!}
          <select name="degree" id="degree">
            @foreach($degree as $deg)
              @if($deg->id == $project->project_degree)
                <option value="{{$deg->id}}" selected>{{$deg->name}}</option>
              @else
                <option value="{{$deg->id}}">{{$deg->name}}</option>
              @endif
            @endforeach
          </select>
          {!!Form::label('description', 'Project brief') !!}
          {!!Form::textarea('description', $project->project_description, ['placeholder' => "Tell us a bit about your project, this doesn't have to be formal... Just explain your idea in your own words." ])!!}

          {!!Form::submit('Propose Project', null, ['class' => 'btn']) !!}
         {!! Form::close() !!}
      </div>
    </div>



  @endsection
@endsection
