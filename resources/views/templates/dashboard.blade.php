<main class="dashboard">
  <aside class="left--sidebar">
    <div class="welcome--message">
      <p>Welcome <br> <span>{{$student_id}}</span></p>
    </div>
    <nav class="main--navigation">
      <a href="/student/dashboard/">View all approved projects</a>
      <a href="/student/dashboard/what-is-a-project">Learn what a project is</a>
      <a href="/student/dashboard/sample-projects">Take a look at some sample projects</a>

    </nav>
    <nav class="nav--bottom">
      <a href="/student/dashboard/projects/create">Propose your own project</a>
      <a href="/student/dashboard/projects">My project proposals</a>
      <a href="/student/dashboard/logs">Login history</a>
      <a href="/student/dashboard/liked-projects">My liked projects</a>
      <a class="logout" href="/logout">Logout</a>
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
    @include('templates.footerlinks')
  </section>
  <aside class="section--block right--sidebar">
    <div class="hero">
      @include('templates.bazaar')
    </div>
  </aside>
</main>
