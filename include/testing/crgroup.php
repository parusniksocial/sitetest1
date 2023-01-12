<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать тему</title>
    <link rel="stylesheet" href="../../bootstrap.css">
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
<form class="loginform" action="groups/creategroup.php" method="post">
	<label>Название темы</label>
	<input type="text" name="groupname" placeholder="Название"><BR><BR>
	<button type="submit" >Создать тему</button>
</form>
</body>
</html>