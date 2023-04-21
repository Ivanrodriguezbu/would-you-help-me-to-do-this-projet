<!DOCTYPE html>
<html>
<head>
	<title>Olvidé mi contraseña</title>
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

			<?php if(isset($_POST['email'])): ?>
				<p>Se ha enviado un correo electrónico con las instrucciones para restablecer la contraseña a <?php echo $_POST['email']; ?>.</p>
			<?php else: ?>
				<form action="forgot-password.php" method="POST">
					<h2>Olvidé mi contraseña</h2>
					<label for="email">Correo electrónico:</label>
					<input type="email" id="email" name="email">
					<p>Se enviará un correo electrónico con las instrucciones para restablecer la contraseña.</p>
					<input type="submit" value="Enviar">
				</form>
			<?php endif; ?>
		</section>
	</main>
</body>
</html>

