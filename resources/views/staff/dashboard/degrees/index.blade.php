@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.staffdashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <p>Edit all Degree Types</p>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">All Degrees</span></p>
    </div>
    <div class="main-body">
      <table class="rwd-table " cellspacing="0">
        <tbody class="table--group">
        <tr class="table--headers">
          <th>Degree name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
          @foreach($degrees as $degree)
              <tr>
                <td data-th="Degree Name">{{$degree->name}}</td>
                <td data-th="Edit"><a class="btn btn-outline" href="/staff/dashboard/degrees/{{$degree->id}}/edit">Edit Degree Pathway</a></td>
                <td data-th="Delete">
                  {!! Form::open(['method' => 'DELETE', 'route' => ['staff.dashboard.degrees.destroy', $degree->id]]) !!}
                   {!! Form::submit('Delete', ['class' => 'btn btn-outline']) !!}
                  {!! Form::close() !!}
                </td>
              </tr>
          @endforeach
        </tbody>
    </table>
    </div>


  @endsection
@endsection
