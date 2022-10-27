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
  <link rel="manifest" href="manifest.json">
  <title>POMA EXPO 2022</title>
</head>

<body>
  <header class="my-4 ms-md-5">
    <nav class="navbar bg-light p-0" id="nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <div class="row">
            <img src="img/superatelogo.png" alt="Logo" width="auto" height="auto" class="d-inline-block align-text-top p-0 col-4 offset-1 offset-md-0 align-self-center">
            <span class="text-wrap h-100 px-2 col-7 col-md-8 text-center text-md-start align-self-center" id="title">
              Centro ¡Supérate! Fundación Poma
            </span>
          </div>
        </a>
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="col-md-12 text-justify">
      <hr>
      <img src="img/Expo_2022.png" width="auto" class="img mt-3 mb-3" alt="">
      <hr>
      <p>Expo 2022 – Back to Reality is an event organized by students from second year of the scholarship. They have worked in groups with mentors to develop a website or app that fits a problem caused by the pandemic. This Expo was inspired by Together to Help and Technology Promoters. Both with the purpose of sharing solutions in response to the problems due to the pandemic.
       <br><br> By now, students have showed the ravages of the last 2 years, in which they have had to adapt their habits and lifestyle. However, the world and society are trying to return to a "new reality" which implies unlearning some things and building new habits to promote a healthy lifestyle.
        To this end, our students have decided to create technological tools to provide solutions to problems found because of the pandemic. </p>

      <h1 class="title">Check the projects</h1>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-4">
      <?php foreach ($projects as $project) : ?>

        <div class="col mb-3">
          <div class="card text-center">
            <div class="card-header">
              <?= $project['name'] ?>
            </div>
            <div class="card-body">
              <img src="img/<?= $project['image'] ?>" alt="" width="100%">
              <p class="card-text"><?= $project['description'] ?></p>
              <a href="../<?= $project['link'] ?>" class="btn btn-primary">Check it out</a>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
    </div>

  </div>

</body>

</html>