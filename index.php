<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesión</title>
	<link rel="stylesheet" href="styles.css">
		<style>
	/* Fuente personalizada */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

body {
	font-family: 'Poppins', sans-serif;
}

/* Estilos generales */
body {
	background-color: #ffc123;
	font-family: 'Poppins', sans-serif;
	margin: 0;
	padding: 0;
}

		form {
			background-color: white;
			padding: 20px;
			border-radius: 10px;
			width: 700px;
			margin: 0 auto;
			margin-top: 120px;
			box-shadow: 0 0 10px #888888;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="email"], input[type="password"] {
			padding: 10px;
			width: 95%;
			border: none;
			border-radius: 5px;
			margin-bottom: 20px;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #ffc123;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="registro.php">Registro</a></li>
				<li><a href="contacto.php">Contactanos</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section>

			<form action="inicio_sesion.php" method="POST">
				<h2 align="center">Iniciar Sesion</h2>
				<label for="username">Nombre de usuario:</label>
				<input type="text" id="username" name="username">
				<label for="password">Contraseña:</label>
				<input type="password" id="password" name="password">
				<label for="forgot-password"><a href="forgot-password.php">¿Olvidaste tu contraseña?</a></label>
				<input type="submit" value="Iniciar sesión">
			</form>
		</section>
	</main>
</body>
</html>
