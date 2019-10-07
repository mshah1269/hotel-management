  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($page == 'home'){echo 'active';} ?>">
            <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if($page == 'about'){echo 'active';} ?>">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item <?php if($page == 'contact'){echo 'active';} ?>">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item <?php if($page == 'login'){echo 'active';} ?>">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
