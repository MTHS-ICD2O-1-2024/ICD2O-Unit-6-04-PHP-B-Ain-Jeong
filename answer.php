<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Volume of a Sphere, with a Quere String" />
    <meta name="keywords" content="mths, icd2o" />
    <meta name="author" content="Ain Jeong" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Volume of a Sphere, with a Quere String</title>
  </head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Sphere, with a Quere String</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/volume-of-sphere.jpg" alt="sphere image" width="500" />
      </div>
      <div class="page-content-answer">
        <div id="dimension"></div>
        <div id="volume"></div>
          <?php
          $counter = 0;

          // input
          $firstNumber = $_GET["first-number"];
          $secondNumber = $_GET["second-number"];

          $originalFirstNumber = $firstNumber;

          // process
          while ($firstNumber >= $secondNumber) {
            $firstNumber -= $secondNumber;
            $counter++;

            if ($firstNumber < $secondNumber) {
              break;
            }
          }

          // output
          echo $originalFirstNumber . ' ÷ ' . $secondNumber . ' is: ' . $counter . ' R ' . $firstNumber;
          ?>
        </div>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>