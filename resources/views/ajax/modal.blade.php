    <div class="modal-content">
      <h2>{{$project->project_name}}</h2>
      <p>{{$project->project_description}}</p>
    </div><!-- content -->
    <div class="modal-footer">
      <span class="author">Proposed by: {{$project->student->student_id}}</span>
      <div class="element--like">
        @if($like > 0)
        <i class="press" data-slug="{{$project->project_slug}}" data-user="{{$student->student_id}}"></i>
        @else
        <i data-slug="{{$project->project_slug}}" data-user="{{$student->student_id}}"></i>
        @endif
      </div>
    </div>
