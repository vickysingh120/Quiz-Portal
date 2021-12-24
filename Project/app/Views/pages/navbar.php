<nav class="navbar navbar-expand-lg navbar-light bg_color1">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url()?>">
      <img src="<?=base_url()?>/assets/img/logo/logo3.svg" width="50px">
      <b style="font-size:1.4rem; border-radius:3px" class="bg-warning p-2">PracticeQues.com</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="blog.php">
            <i class="bi bi-chat-left-text-fill"> </i>
            Blog
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>/quiz">
          <i class="bi bi-question-octagon-fill"></i> Quizes
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>/courses-coding-sphere">
          <i class="bi bi-book-half"> </i> Courses
          </a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->

      </ul>
      <div class="d-flex ">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <button class="btn btn-warning pr-5" type="button" data-bs-toggle="modal" data-bs-target="#register_modal">Register</button> &nbsp;&nbsp;
        <button class="btn btn-warning pr-5" type="button" data-bs-toggle="modal" data-bs-target="#login_modal">Login</button>
      </div>
    </div>
  </div>
</nav>