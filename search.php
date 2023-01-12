<?php
//Парусник - 12.2022
session_start();
?>
<html>
<head>
	<title>Логин</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ПАРУСНИК</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Главная страница
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Вход</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Регистрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myprofile.php">Моя страница</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="include/testing/groupsearch.php">Найти тему</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="include/testing/crgroup.php">Создать тему</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
	<form class="loginform" action="include/otherprofile.php" method="post">
		<label>Логин</label>
		<input type="text" name="idq" placeholder="ID"><BR><BR>
		<button type="submit">Поиск по логину</button>
		<?php
			if ($_SESSION['message']) {
				echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
			}
			unset($_SESSION['message']);
			unset($_SESSION['message']);
		?>
	</form>
</body>
</html>