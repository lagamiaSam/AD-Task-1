<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grades Information</title>
    <link rel="stylesheet" href="../page/assets/css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
  <div class="container-fluid">

  <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
      <img src="../page/assets/img/high-school.jpg" alt="School Logo" height="60" class="d-inline-block align-text-top">
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
    <div class="row">
        <div class="col-12">
            <h2 class="display-6 fw-semibold lh-1 mb-4">Student Grades</h2>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Student Name</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $students = [
                            ["name" => "Samuel Lagamia", "grade" => 85],
                            ["name" => "Kent Valencia", "grade" => 92],
                            ["name" => "Jude Botor", "grade" => 58],
                            ["name" => "Owen Lianco", "grade" => 74]
                        ];

                        foreach ($students as $student) {
                            $remark = "";
                            if ($student['grade'] >= 90) {
                                $remark = "Excellent";
                            } elseif ($student['grade'] >= 75) {
                                $remark = "Good";
                            } elseif ($student['grade'] >= 60) {
                                $remark = "Satisfactory";
                            } else {
                                $remark = "Needs Improvement";
                            }

                            echo "<tr>
                                    <td>{$student['name']}</td>
                                    <td>{$student['grade']}</td>
                                    <td>{$remark}</td>
                                 </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>