@extends('templates.master')
@section('title', 'Staff Area | All blog posts you have approved | Project Bazaar')
@section('content')
  @extends('templates.staffdashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <div class="search--group">
        <span>Searching for:</span>
          <select data-filter-group="degree" id="degree--group">
            <option selected data-filter="*">All Projects</option>
            @foreach($degree as $deg)
                <option  data-filter=".<?php echo str_replace(' ', '-', strtolower($deg->name)); ?>">{{$deg->name}}</option>
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
      <p>You are currently viewing: <span class="project--display">All projects you have approved</span></p>
    </div>
    <div class="main-body">
      <table class="rwd-table " cellspacing="0">
        <tbody class="table--group">
        <tr class="table--headers">
          <th>Project Name</th>
          <th>Degree</th>
          <th>Author</th>
          <th>Authorized By</th>
          <th>Date</th>
          <th>Comments</th>
          <th>Approve</th>
        </tr>
          @foreach($project as $pro)
            @if($pro->is_authorized)
              @if(Auth::user()->staff->id == $pro->staff[0]->id)
              <tr class="table--item <?php echo str_replace(' ', '-', strtolower($pro->degree->name)); ?> <?php echo date('Y',strtotime($pro->project_date)); ?>">
                <td data-th="Project Name">{{$pro->project_name}}</td>
                <td data-th="Degree">{{$pro->degree->name}}</td>
                <td data-th="Author">{{$pro->student->student_id}}</td>
                <td data-th="Authorized By">{{$pro->staff[0]->staff_name}}</td>
                <td data-th="Date">{{$pro->project_date}}</td>
                <td data-th="Comments"><a class="btn btn-outline" href="/staff/dashboard/projects/{{$pro->id}}/comments">View Comments <?php echo count($pro->comment); ?></a></td>
                <td data-th="Approve">
                  @if($pro->is_authorized)
                    @if($pro->staff[0]->staff_name == Auth::user()->staff->staff_name)
                      <a class="btn btn-outline btn-approve" href="/staff/dashboard/projects/{{$pro->id}}/approve" >Unapprove Project</a>
                    @else
                      {{$pro->staff[0]->staff_name}} must unapprove
                    @endif

                  @else
                    <a class="btn btn-outline btn-approve" href="/staff/dashboard/projects/{{$pro->id}}/approve">Approve Project</a>
                  @endif
                </td>
              </tr>
            @endif
            @endif
          @endforeach
        </tbody>
    </table>
    </div>


  @endsection
@endsection
