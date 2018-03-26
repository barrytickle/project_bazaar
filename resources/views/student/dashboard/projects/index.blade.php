@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <div class="search--group">
        <span>Searching for:</span>

          <select data-filter-group="degree" id="degree--group">
            <option selected data-filter="*">All Projects</option>
            @foreach($degree as $deg)
              @if(Auth::user()->student->degree_id == $deg->id)
                <option  data-filter=".<?php echo str_replace(' ', '-', strtolower($deg->name)); ?>" selected>{{$deg->name}}</option>
              @else
                <option data-filter=".<?php echo str_replace(' ', '-', strtolower($deg->name)); ?>">{{$deg->name}}</option>
              @endif
            @endforeach
          </select>
      </div>
      <div class="default-navigation">
        <p><span>{{$degree_count}}</span> Projects Proposed</p>
        <p><span>{{$staff_count}}</span> Staff members for pathway</p>
        <div class="select--group" data-filter-group="year"><p>Year</p> <select>
          @foreach($years as $year)
            <option data-filter=".{{$year}}">{{$year}}</option>
          @endforeach
        </select>
      </div>
      </div>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">All projects</span></p>
    </div>
    <div class="main-body">
      <table class="rwd-table " cellspacing="0">
        <tbody class="table--group">
        <tr class="table--headers">
          <th>Project Name</th>
          <th>Author</th>
          <th>Authorized By</th>
          <th>Date</th>
          <th>Edit</th>
          <th>Comments</th>
          <th>Delete</th>
        </tr>
          @foreach($project as $pro)
              <tr class="table--item <?php echo str_replace(' ', '-', strtolower($pro->degree->name)); ?> <?php echo date('Y',strtotime($pro->project_date)); ?>">
                <td data-th="Project Name">{{$pro->project_name}}</td>
                <td data-th="Author">{{$pro->student->student_id}}</td>
                <td data-th="Authorized By">
                  @if($pro->is_authorized)
                      {{$pro->staff[0]->staff_name}}
                  @else
                      Not Authorized
                  @endif
                </td>
                <td data-th="Date">{{$pro->project_date}}</td>
                <td data-th="Edit"><a class="btn btn-outline" href="/student/dashboard/projects/{{$pro->id}}/edit">Edit Project</a></td>
                <td data-th="Comments"><a class="btn btn-outline" href="/student/dashboard/projects/{{$pro->id}}/comments">View Comments <?php echo count($pro->comment); ?></a></td>
                <td data-th="Delete">
                  {!! Form::open(['method' => 'DELETE', 'route' => ['student.dashboard.projects.destroy', $pro->id]]) !!}
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
