<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Grades Viewing</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
      <img src="../assets/img/high-school.jpg" alt="School Logo" height="60" class="d-inline-block align-text-top">
      <span class="ms-3 fs-4">Mallorca Highschool</span>
    </a>

    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Mallorca Highschool</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../page/index.php">GRADES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">INFO</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5">
        <div class="col-10 col-sm-8 col-lg-6 mx-auto text-center">
            <img src="../assets/img/report-card.png" class="d-block mx-lg-auto img-fluid" alt="Report Card Image" loading="lazy">
        </div>
    <div class="col-lg-6 mx-auto">
            <h2 class="display-6 fw-semibold lh-1 mb-2">ONLINE EDUCATION</h2>
            <h1 class="display-5 fw-bold lh-1 mb-3">VIEWING GRADES</h1>
            <p class="lead">
                <?php
                    $lines = [
                        "Welcome to Mallorca Highschool’s Online Education Portal! With just a few clicks, students can now access their academic performance, stay updated with their grades, and keep track of their progress — anytime, anywhere. Start your journey toward smarter learning today!"
                    ];

                    foreach ($lines as $line) {
                        echo $line . "<br>";
                    }

                    $showButton = true;
                    if ($showButton) {
                        echo "<br><a href='grades.php' class='btn btn-primary btn-lg mt-3'>VIEW GRADES NOW!</a>";
                    }
                ?>
            </p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>