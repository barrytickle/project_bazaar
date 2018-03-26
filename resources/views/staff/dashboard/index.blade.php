@extends('templates.master')
@section('title', 'Staff Area | Home | Project Bazaar')
@section('content')
  @extends('templates.staffdashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <p>Default Role: <span>Staff Member</span></p>

    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">All projects</span></p>
    </div>
    <div class="main-body">
      <div class="block--row">
        <div class="block block--pencil">
          <div class="options">
            <a href="#">View Requests</a>
          </div>
          <span><?php echo count($project); ?></span>
          <p>Proposal Request(s)</p>
        </div>
        <div class="block block--blog">
          <div class="options">
            <a href="#">View Posts</a>
          </div>
          <span><?php echo count($blog); ?></span>
          <p>View Blog Post(s)</p>
        </div>
        <div class="block block--student">
          <div class="options">
            <a href="#">View Approved Projects</a>
          </div>
          <span><?php echo count($student); ?></span>
          <p>Registered Student(s)</p>
        </div>
      </div>
      <div class="table--row">
        <div class="table--block">
          <h2>Projects to propose (<?php echo count($project); ?>)</h2>
          <table class="rwd-table " cellspacing="0">
            <tbody class="table--group">
            <tr class="table--headers">
              <th>Project Name</th>
              <th>Author</th>
              <th>Degree</th>
              <th>Date</th>
              <th>Comments</th>
              <th>View</th>
            </tr>
              @foreach($project as $pro)
                  <tr class="table--item <?php echo str_replace(' ', '-', strtolower($pro->degree->name)); ?> <?php echo date('Y',strtotime($pro->project_date)); ?>">
                    <td data-th="Project Name">{{$pro->project_name}}</td>
                    <td data-th="Author">{{$pro->student->student_id}}</td>
                    <td data-th="Degree">{{$pro->degree->name}}</td>
                    <td data-th="Date">{{$pro->project_date}}</td>
                    <td data-th="Comments"><?php echo count($pro->comment); ?></td>
                    <td data-th="View"><a class="btn btn-outline" href="/staff/dashboard/projects/{{$pro->id}}/comments" >View Project</button></td>
                  </tr>
              @endforeach
            </tbody>
        </table>
        </div>
        <div class="blog--block">
          <h2>Blog Posts</h2>
          <p>The Latest Blog Posts</p>
          <div class="blog--loader">
            @foreach($blog as $blogs)
            <div class="blog">
              <h3>{{$blogs->blog_title}}</h3>
              <p>
                <?php echo substr($blogs->blog_content, 0, 180) . '...'; ?>
              </p>
              <div class="options">
                <a class="btn" href="/staff/dashboard/blog/{{$blogs->id}}/edit">Edit</a>
                {!! Form::open(['method' => 'DELETE', 'route' => ['staff.dashboard.blog.destroy', $blogs->id]]) !!}
                 {!! Form::submit('Delete', ['class' => 'btn']) !!}
                {!! Form::close() !!}
              </div>
            </div>
          @endforeach

          </div>
        </div>
      </div>



    </div>
  @endsection
@endsection
