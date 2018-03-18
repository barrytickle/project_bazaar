@extends('templates.master')
@section('title', 'Project Bazaar, Login')
@section('content')
<main class="split--group">

  <section class="section--form">
    <div class="form--group">
      <h2>Don't have an account? No worries! Let's get you registered</h2>
        {!! Form::open(['autocomplete' => 'off']) !!}
          {!!Form::label('student_email', 'Your Student ID') !!}
          {!!Form::text('student_email', null, ['placeholder' => 'e.g. 22678832', 'maxlength' => '8']) !!}

          {!!Form::label('student_password', 'Your password:') !!}
          {!!Form::password('student_password') !!}
          {!!Form::label('student_password_confirm', 'Confirm Your password:') !!}
          {!!Form::password('student_password_confirm') !!}
          {!!Form::label('degree', 'Choose your default pathway:') !!}
          {!!Form::select('degree', $array) !!}
          <div class="submit-block">
            {!!Form::submit('Register', null, ['class' => 'btn']) !!}
          </div>
         {!! Form::close() !!}
      </form>
    </div>
@include('templates.footerlinks')
  </section>
  <section class="section--block">
    <div class="hero">
      @include ('templates.bazaar')
    </div>
  </section>
</main>
@endsection
