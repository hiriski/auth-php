<?php
  define("TITLE", "Learn PHP");


  /** Membuat function root (base_url) ini bisa dipake untuk CI */
  function base_url() {
    $host = $_SERVER['HTTP_HOST'];
    $name = $_SERVER['SCRIPT_NAME'];

    /* replace basename() misal /index.php dengan string kosong */
    $scriptname = str_replace(basename($name), '', $name);
    if(isset($_SERVER['HTTPS'])) {
      return "https://" . $host . $scriptname;
    }
    else {
      return "http://" . $host . $scriptname;
    }
  }

  
?>
<html>
<head>
  <title><?php echo TITLE ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://localhost/cdn/bootstrap/css/bootstrap.min.css">
  <style>
    body {
      font-size: 18px;
      font-family: 'Ubuntu', sans-serif;
      background-color: #f7f7f7;
    }
    footer {
      margin-top: 100px;
    }
    .floating-alert {
      position: absolute;
      left: 2rem;
      bottom: 2rem;
    }
  </style>
</head>

<body>

<header class="mt-4">
  <div class="container">
      <ul class="nav justify-content-center">
        <li class="nav-item"><a href="<?=base_url();?>" class="nav-link">Index</a></li>
        <li class="nav-item"><a href="<?=base_url();?>signin.php" class="nav-link">SignIn</a></li>
        <li class="nav-item"><a href="<?=base_url();?>signup.php" class="nav-link">SingUp</a></li>
        <li class="nav-item"><a href="<?=base_url();?>dashboard.php" class="nav-link">Dashboard</a></li>
      </ul>
  </div>
</header>

<!-- Content dinamis berdasarkan section -->