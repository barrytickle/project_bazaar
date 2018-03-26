@extends('templates.master')
@section('title', 'Register your Staff Account | Project Bazaar')
@section('content')
<main class="split--group">

  <section class="section--form">
    <div class="form--group">
      <h2>Need a new Staff Account? No worries! Let's get you registered</h2>
        {!! Form::open(['autocomplete' => 'off']) !!}
        {!!Form::label('staff_name', 'Your Name *') !!}
        {!!Form::text('staff_name', null, ['placeholder' => 'e.g. john doe', 'required' => 'required']) !!}
        {!!Form::label('staff_email', 'Your Email Address *') !!}
        {!!Form::text('staff_email', null, ['placeholder' => 'e.g. john.doe@go.edgehill.ac.uk', 'required' => 'required']) !!}

          {!!Form::label('staff_password', 'Your password:') !!}
          {!!Form::password('staff_password') !!}
          {!!Form::label('staff_password_confirm', 'Confirm Your password:') !!}
          {!!Form::password('staff_password_confirm') !!}
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
