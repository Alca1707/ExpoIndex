<?php require('projectsArray.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img/superatelogo.png" type="image/png">
  <title>POMA EXPO 2022</title>
</head>

<body>
  <header class="mb-5">

    <nav class="navbar bg-light p-0" id="nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <div class="row">
            <img src="img/superatelogo.png" alt="Logo" width="auto" height="auto" class="d-inline-block align-text-top p-0 col-3 align-self-center">
            <span class="text-wrap h-100 px-2 col-9 text-center text-md-start align-self-center">
              Centro ¡Supérate! Fundación Poma
            </span>
          </div>
        </a>
      </div>
    </nav>
  </header>
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-4">
      <?php foreach ($projects as $project) : ?>
        <div class="col mb-3">
          <div class="card text-center">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title"><?= $project['name'] ?></h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>