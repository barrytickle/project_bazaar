<main class="dashboard">
  <aside class="left--sidebar">
    <div class="welcome--message">
      <p>Welcome <br> <span>{{$student_id}}</span></p>
    </div>
    <nav class="main--navigation">
      <a href="#">Learn what a project is</a>
      <a href="#">Take a look at students proposed projects</a>
      <a href="#">Take a look at some sample projects</a>
    </nav>
    <nav class="nav--bottom">
      <a href="#">Login history</a>
      <a href="#">My project proposals</a>
      <a href="#">My liked projects</a>
      <a class="logout" href="#">Logout</a>
    </nav>
  </aside>
  <div class="hamburger_float">
    <div id="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
    </div>
  <section>
    @yield('dashboardcontent')
    @extends('templates.footerlinks')
  </section>
  <aside class="section--block right--sidebar">
    <div class="hero">
      @extends('templates.bazaar')
    </div>
  </aside>
</main>
