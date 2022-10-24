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
  <link rel="manifest" href="/manifest.json">
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
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis tristique nunc, vitae scelerisque augue. Phasellus eu tincidunt ante. Pellentesque est magna, interdum at ex quis, porttitor sagittis sapien. Vestibulum vitae maximus lectus. Praesent rutrum lorem sed accumsan semper. Vestibulum in est sed ante aliquam viverra non id ex. Morbi vehicula feugiat mi. Aenean convallis eget libero sit amet mollis. Cras nulla eros, ultrices quis congue tempor, ultrices non urna. Nullam imperdiet dignissim porta. Nullam nec facilisis neque, eget pretium eros. Quisque laoreet elit lacus, ut sollicitudin elit ullamcorper a. Maecenas gravida maximus est. Phasellus et tincidunt urna, in condimentum lacus. Nulla eu semper mi. Etiam ligula felis, pulvinar eget suscipit ac, porta sit amet justo.
        <br><br>
        Maecenas eu arcu ex. Nam in mauris sit amet enim cursus mattis viverra ut elit. Maecenas sed est non justo accumsan vestibulum. Morbi vel diam rutrum, venenatis erat eu, sodales justo. Praesent ornare arcu in feugiat aliquet. Suspendisse lacinia varius egestas. Sed non tincidunt metus. Nunc vehicula purus quis dui pellentesque bibendum. Nullam a velit tempus, aliquet lacus id, commodo nibh. Sed mattis eleifend sem, fringilla viverra arcu convallis sit amet. Vivamus luctus, enim id mollis sodales, est justo laoreet nisi, non laoreet lectus arcu ac purus. In sed sodales nibh. Phasellus scelerisque turpis at nibh condimentum tincidunt. Vestibulum sodales orci justo, et ullamcorper nulla semper eget.
      </p>

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