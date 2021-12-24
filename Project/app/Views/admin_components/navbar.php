<nav class="navbar navbar-expand-lg navbar-light bg_color1">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url()?>/admin">
      <img src="<?=base_url()?>/assets/img/logo/logo3.svg" width="50px">
      <b style="font-size:1.4rem; border-radius:3px" class="bg-warning p-2">P<small>re</small>Y<small>ear</small>Q<small>ues</small></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
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
        </li> -->
        <!-- Exam Dropdown -->
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Exam
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=base_url()?>/admin/add_exam">Add Exam</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>/admin/edit_exam">Edit Exam</a></li>
          </ul>
        </li>
        <!-- Test Dropdown -->
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Test
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=base_url()?>/admin/add_test">Add Test</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>/admin/edit_test">Edit Test</a></li>
          </ul>
        </li>
        <!-- Ques Dropdown -->
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Ques
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?=base_url()?>/admin/add_ques">Add Ques</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>/admin/edit_ques">Edit Ques</a></li>
          </ul>
        </li>

      </ul>
      <div class="d-flex ">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
      
        <button class="btn btn-warning pr-5" type="button">Logout</button>
      </div>
    </div>
  </div>
</nav>