@extends('templates.master')
@section('title', 'Project Bazaar, Login')
@section('content')
<main class="split--group">
  <section class="section--form">
    <div class="form--group">
      <h2>Let's get you started.</h2>
        {!! Form::open() !!}
          {!!Form::label('student_email', 'Your Student ID') !!}
          {!!Form::text('student_email', null, ['placeholder' => 'e.g. 22678832', 'maxlength' => '8']) !!}

          {!!Form::label('student_password', 'Your password:') !!}
          {!!Form::password('student_password', null) !!}
          <div class="submit-block">
            {!!Form::submit('Login', null, ['class' => 'btn']) !!}
            <a href="/register">Don't have an account? Register here</a>
          </div>
         {!! Form::close() !!}
      </form>
    </div>
@extends('templates.footerlinks')
  </section>
  <section class="section--block">
    <div class="hero">
      @include ('templates.bazaar')
    </div>
  </section>
</main>
@endsection
