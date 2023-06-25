<?php
$exercises = [
  [1, 'PHP Basics', 'Task1', ['ex1.php', 'ex2.php', 'ex3.php', 'ex4.php', 'ex5.php', 'ex6.php', 'ex7.php', 'ex8.php', 'ex9.php']],
  [2, 'PHP Arrays And Functions', 'Task2', ['ex1.php', 'ex2.php', 'ex3.php', 'ex4.php', 'ex5.php']],
  [3, 'PHP Classes And Objects ', 'StudentSystem', ['Demonstration.php']]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./public/imgs/shortIcon.png">
  <link rel="stylesheet" href="./public/styles/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/818083744c.js" crossorigin="anonymous"></script>
  <title>Solution Exercises</title>
</head>

<body onload="myScript()">

      <!-- Start Header -->
      <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo">Mazin Al-Maswaby</a>
        </div>
    </div>
    <!-- End Header -->


  <!-- Start Landing -->
  <div class="landing">
    <div class="container">
      <div class="text">
        <h1 id="heading" data-text="Welcome To My Homework Website"></h1>
        <p>
          Here I am going to share solutions for my homework, in the under section I'm displaying boxes that contain all of the exercises with their output
        </p>
      </div>
      <div class="image">
        <img src="./public/imgs/landing.png" alt="">
      </div>
    </div>
    <a href="#exercises" class="go-down">
      <i class="fas fa-angle-double-down fa-2x"></i>
    </a>
  </div>
  <!-- End Landing -->

  <div class="exercises" id="exercises">
    <h2 class="main-title">Exercises</h2>
    <div class="container">

      <?php
      foreach ($exercises as $exercise) {
      ?>
        <div class="box">
          <div class="icon">
            <i class="iconI fas fa-laptop-code fa-2x"></i>
          </div>
          <hr>
          <div class="content">
            <h3>Assignment <?= $exercise[0] ?></h3>
            <p><?= $exercise[1] ?></p>
          </div>
          <div class="info">
            <button>Solutions</button>
            <i class="fas fa-arrow-down"></i>
          </div>
          <div class="more">
            <?php
            foreach ($exercise[3] as $item) {
            ?>
              <div class="links">
                <a target="_blank" class="link" href="https://github.com/mazin-majdy/phpExercises/blob/master/<?= $exercise[2] ?>/<?= $item ?>"><?= $item ?></a>
                <a target="_blank" class="link" href="<?= $exercise[2] ?>/<?= $item ?>">Output</a>
              </div>

              <!-- <hr> -->
            <?php } ?>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
  <footer>
    <p>&copy; All CopyRight Reserved <?= date('Y') ?> Mazin Almaswaby
    <a target="_blank" href="https://www.facebook.com/mazen.almaswaby"><i class="fab fa-facebook"></i>&nbsp;</a>
    <a target="_blank" href="https://www.instagram.com/mazin_majdy/"><i class="fab fa-instagram"></i>&nbsp;</a>
    <a target="_blank" href="https://github.com/mazin-majdy"><i class="fab fa-github"></i></a>
    </p>
  </footer>
  <script src="./public/js/main.js"></script>
</body>

</html>