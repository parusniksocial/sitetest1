<?php
//Парусник - 12.2022
    session_start();
    $group = $_SESSION['watchgroup'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр темы</title>
    <link rel="stylesheet" href="../../../bootstrap.css">
</head>
<body>
<form>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ПАРУСНИК</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="../../../index.php">Главная страница
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../../login.php">Вход</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../../register.php">Регистрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../../myprofile.php">Моя страница</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../groupsearch.php">Найти тему</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../crgroup.php">Создать тему</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    <h2>
        <?php
        print($group['name']);
        ?>
    </h2>
</form>
</body>
</html>