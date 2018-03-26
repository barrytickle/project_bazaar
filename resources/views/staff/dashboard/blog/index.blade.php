@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.staffdashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <p>Edit all blogs</p>

    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">All Blogs</span></p>
    </div>
    <div class="main-body">
      <table class="rwd-table " cellspacing="0">
        <tbody class="table--group">
        <tr class="table--headers">
          <th>Blog Name</th>
          <th>Blog Date</th>
          <th>Blog Type</th>
          <th>Slug</th>
          <th>Preview</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
          @foreach($blog as $blogs)
              <tr>
                <td data-th="Blog Name">{{$blogs->blog_title}}</td>
                <td data-th="Blog Date"><?php echo date('d-m-y', strtotime($blogs->blog_date)); ?></td>
                <td data-th="Blog Type">{{$blogs->types->name}}</td>
                <td data-th="Slug">{{$blogs->slug}}</td>
                <td data-th="Preview"><a class="btn btn-outline" href="/staff/dashboard/blog/{{$blogs->id}}">Preview</td>
                <td data-th="Edit"><a class="btn btn-outline" href="/staff/dashboard/blog/{{$blogs->id}}/edit">Edit Blog Post</a></td>
                <td data-th="Delete">
                  {!! Form::open(['method' => 'DELETE', 'route' => ['staff.dashboard.blog.destroy', $blogs->id]]) !!}
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
