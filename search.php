<?php
//Парусник - 12.2022
session_start();
?>
<html>
<head>
	<title>Поиск по логину</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<a href="index.php">
	<img src="logo.jpg" alt="Парус" width="400" height="400">
</a>
	<form class="loginform" action="include/otherprofile.php" method="post">
		<label>Login</label>
		<input type="text" name="idq" placeholder="ID"><BR><BR>
		<button type="submit">Искать</button>
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