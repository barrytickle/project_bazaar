@extends('templates.master')
@section('title', 'Test')
@section('content')
  @extends('templates.dashboard')
  @section('dashboardcontent')
    <div class="toolbar toolbar--top filters">
      <span>Commenst for project {{$project->project_name}}</span>
    </div>
    <div class="toolbar toolbar--secondary">
      <p>You are currently viewing: <span class="project--display">Project Comments</span></p>
    </div>
    <div class="main-body">
      <div class="text--group">
        <h1>{{$project->project_name}}</h1>
        <p>{{$project->project_description}}</p>

        <div class="comments">
          @foreach($comments as $comment)

          <article class="comment">
            <a class="comment-img" href="#non">
              <img src="/images/logo/crest-colour.svg" alt="" width="50" height="50">
            </a>
            <div class="comment-body">
              <div class="text">
                <p>{{$comment->pivot->project_comment}}</p>
              </div>
              <p class="attribution">
                by
                @if($comment->role == 2)
                  {{$comment->staff->staff_name}} - Tutor
                @else
                  {{$comment->student->student_id}} - Student
                @endif
              </p>
            </div>
          </article>
        @endforeach
        </div>


        <h2>Make a comment</h2>
        {!! Form::open(['method' => 'POST','url' => 'student/dashboard/projects/comment/'. $project->id]) !!}
          {!!Form::label('project_comment', 'Add Comment') !!}
          {!!Form::textarea('project_comment', null,  ['placeholder' => 'Add to the thread of the comments']) !!}
          {!!Form::submit('Add Comment', null, ['class' => 'btn']) !!}
         {!! Form::close() !!}
      </div>
    </div>



  @endsection
@endsection
