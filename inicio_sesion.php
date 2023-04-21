<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style>
	/* Fuente personalizada */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

body {
	font-family: 'Poppins', sans-serif;
}

/* Estilos generales */
		
.container1{
	width: 35%;
	margin: auto;
	text-align: center;
	padding: 20px;
	background-color: #f2f2f2;
	border-radius: 10px;
	box-shadow: 0 0 10px #888888;
	margin-top: 80px;
	
}

		
h1 {
	font-size: 2em;
	color: #333333;
}

p {
	font-size: 1.2em;
	color: #666666;
	margin-top: 20px;
	margin-bottom: 20px;
}



body {
	background-color: #ffc123;
	font-family: 'Poppins', sans-serif;
	margin: 0;
	padding: 0;
}
		form {
			padding: 20px;
			border-radius: 10px;
			margin: 0 auto;
			margin-top: 20px;

	
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
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="registro.php">Registro</a></li>
				<li><a href="contacto.php">Contactanos</a></li>
			</ul>
		</nav>
	</header>
<body>

<div class="container1">
		<form action="registrohv.php" method="post">
  <h1>Bienvenido, </h1>
  <p>Gracias por iniciar sesión en nuestra página web.  </p><form cla="unico" action="ingresar_informacion.php" class="container"method="post">
    <p>
      <input type="submit" name="empezar" value="Empezar">
		</p>
		</form>
	<p><a href="cerrar_sesion.php">Cerrar sesión</a></p>
</div>
</body>
</html>
