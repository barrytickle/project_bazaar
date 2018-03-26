<main class="dashboard">
  <aside class="left--sidebar">
    <div class="welcome--message">
      <p>Welcome <br> <span>{{$staff_name}}</span></p>
    </div>
    <nav class="main--navigation">
      <a href="/staff/dashboard/">Home</a>
      <a href="/staff/dashboard/blog">Manage the Blog</a>
      <a href="/staff/dashboard/degrees">Manage Degree Pathways</a>


    </nav>
    <nav class="nav--bottom">
      <a href="/staff/dashboard/blog/create">Create a blog post</a>
      <a href="/staff/dashboard/degrees/create">Add a Degree</a>
      <a href="/staff/dashboard/projects/approved">Projects that I have Approved</a>
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
    @include('templates.stafffooterlinks')
  </section>
</main>
