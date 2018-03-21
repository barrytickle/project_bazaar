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
