<header>
  <nav style="background-color: #D1E1E8;" class="navbar navbar-expand-lg navbar-light bg1-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img style="max-width:100px" class="img-fluid" src="img/paluniv.png"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="page_one.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="page_book.php">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page_comment.php">comment</a>
          </li>
         
        </ul>
      </div>
      <ul class="navbar-nav ">
        <li class="nav-item">
          <?php if (isset($_SESSION['username'])) { ?>
            <span>  <?= $_SESSION['username'] ?></span> | 
            <a  aria-current="page" href="log_out.php">Logout</a>
          <?php } else {
          ?>
            <a  aria-current="page" href="log_in.php">Login</a>
          <?php } ?>
        </li>
      </ul>
    </div>
  </nav>
</header>