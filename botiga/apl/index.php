<html>
	<head>
		<title>
			FORMULARI DE LOGIN
		</title>
	</head>
	<body>
		<b>FORMULARI DE LOGIN</b><br>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			if ($username == "admin" && $password == "1234") {
				header("Location: home.php");
				exit();
			} else {
				echo "Error";
			}
		}
		?>

		<form action="" method="POST">
			Indica el usuari: <input type="text" name="username" required><br>
			Indica la contrasenya: <input type="password" name="password" required><br>
			<input type="submit" value="Iniciar sessió"/>
		</form>
	</body>
</html>
