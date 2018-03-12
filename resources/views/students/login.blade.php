@extends('templates.master')
@section('title', 'Project Bazaar, Login')
@section('content')
<main class="split--group">
  <section class="section--block">
    <div class="hero">
      <h1>Project Bazaar</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
    </div>
  </section>
  <section class="section--form">
    <div class="form--group">
      <h2>Let's get you started.</h2>
        {!! Form::open() !!}
          {!! Form::label('student_id', 'Your Student ID') !!}
          {!!Form::text('student_id', null, ['placeholder' => 'e.g. 22678832']) !!}
          <div class="submit-block">
            {!! Form::submit('Login') !!}
            <a href="#">How do I find my studentID?</a>
          </div>
         {!! Form::close() !!}
      </form>
    </div>
@extends('templates.footerlinks')
  </section>
</main>
@endsection
