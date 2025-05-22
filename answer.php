<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Sphere, with a Query String" />
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
  <title>Volume of a Sphere, with a Query String</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Sphere, with a Query String</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/volume-of-sphere.jpg" alt="sphere image" width="500" />
      </div>
      <br />
      <div class="page-content">
        <div>Change Query String to calculate the volume of a sphere</div>
        <?php
        // input
        $radius = floatval($_GET['radius']);

        // process
        $volume = (4 / 3) * pi() * pow($radius, 3);

        // output
        echo '<h>Radius = ' . $radius . ' mm<h><br />';
        echo '<h1>Volume = ' . number_format($volume, 2) . ' mm³</h1>';
        ?>

      </div>
    </main>
  </div>
</body>

</html>
