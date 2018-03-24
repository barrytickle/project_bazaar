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
                <option  data-filter=".<?php echo str_replace(' ', '-', strtolower($deg->name)); ?>">{{$deg->name}}</option>
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
          <th>View</th>
        </tr>
          @foreach($project as $pro)
              <tr class="table--item <?php echo str_replace(' ', '-', strtolower($pro->degree->name)); ?> <?php echo date('Y',strtotime($pro->project_date)); ?>">
                <td data-th="Project Name">{{$pro->project_name}}</td>
                <td data-th="Author">{{$pro->student->student_id}}</td>
                <td data-th="Authorized By">{{$pro->staff[0]->staff_name}}</td>
                <td data-th="Date">{{$pro->project_date}}</td>
                <td data-th="View"><a class="btn btn-outline" href="/student/dashboard/{{$pro->id}}" >View Project</button></td>
              </tr>
          @endforeach
        </tbody>
    </table>
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
