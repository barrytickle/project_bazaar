@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.staffdashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Edit {{$degree->name}}</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">Edit Degree Pathway</span></p>
    </div>
    <div class="main-body">
      <div class="text--group">
        <h1>Edit: {{$degree->name}}</h1>
        <h2>Degree Details</h2>
        {!! Form::model($degree, ['method' => 'PATCH', 'url' => 'staff/dashboard/degrees/'. $degree->id]) !!}
          {!!Form::label('name', 'Your Title *') !!}
          {!!Form::text('name', $degree->name) !!}
          {!!Form::submit('Propose Project', null, ['class' => 'btn']) !!}
         {!! Form::close() !!}
      </div>
    </div>



  @endsection
@endsection
