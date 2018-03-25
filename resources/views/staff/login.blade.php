@extends('templates.master')
@section('title', 'Project Bazaar, Login')
@section('content')
<main class="split--group">
  <section class="section--form">
    <div class="form--group">
      <h2>Let's get you started.</h2>
        {!! Form::open() !!}
          {!!Form::label('staff_email', 'Your Email address') !!}
          {!!Form::email('staff_email', null, ['placeholder' => 'e.g. firstname.lastname@go.edgehill.ac.uk']) !!}

          {!!Form::label('staff_password', 'Your password:') !!}
          {!!Form::password('staff_password', null) !!}
          <div class="submit-block">
            {!!Form::submit('Login', null, ['class' => 'btn']) !!}
          </div>
         {!! Form::close() !!}
      </form>
    </div>
@include('templates.stafffooterlinks')
  </section>
  <section class="section--block">
    <div class="hero">
      @include ('templates.bazaar')
    </div>
  </section>
</main>
@endsection
