<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Искать группы</title>
</head>
<body>
<form class="loginform" action="groups/groupwatch.php" method="post">
		<label>ID Группы</label>
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