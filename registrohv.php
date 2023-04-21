<!DOCTYPE html>
<html>
<head>
	<title>Formulario para hoja de vida</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style>
body {
	font-family: 'Open Sans', sans-serif;
}

h1 {
	text-align: center;
	font-size: 2rem;
	margin-top: 0.5rem;
	margin-bottom: 0;
}

.wrapper {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	margin: 0 10%;
}

section {
	width: 30%;
	margin-bottom: 2rem;
	background-color: #fff;
	padding: 1rem;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	border-radius: 5px;
}

h2 {
	font-size: 1.5rem;
	margin-top: 0;
	text-align: center;
}

form {
	display: flex;
	flex-direction: column;
	max-width: 400px;
	margin: 0 auto;
}

label {
	font-size: 1.2rem;
	margin-top: 1rem;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
input[type="direccion"],
input[type="ciudad"],
select {
	padding: 0.5rem;
	border-radius: 5px;
	border: 1px solid #ccc;
	margin-top: 0.5rem;
	font-size: 1rem;
	width: 95%;
}

input[type="submit"] {
	background-color: #ffc123;
	color: #fff;
	border: none;
	padding: 1rem;
	font-size: 1.2rem;
	margin-top: 1rem;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #e6a400;
}

/* Fuente personalizada */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

body {
	font-family: 'Poppins', sans-serif;
}
button {
  background-color: #4CAF50; /* color de fondo */
  border: none; /* sin borde */
  color: white; /* color del texto */
  padding: 12px 24px; /* tamaño del padding */
  text-align: center; /* centrado del texto */
  text-decoration: none; /* sin subrayado */
  display: inline-block; /* en línea */
  font-size: 16px; /* tamaño de fuente */
  margin: 4px 2px; /* margen */
  cursor: pointer; /* cambio de cursor al pasar por encima */
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
	<h1>Formulario para hoja de vida</h1>
	<div class="wrapper">
		<section>
			<h2>Información personal</h2>
			<form method="post" action="generar-pdf.php">
				<label for="nombre">Nombre completo:</label>
				<input type="text" id="nombre" name="nombre" >

				<label for="correo">Correo electrónico:</label>
				<input type="email" id="correo" name="correo" >

				<label for="telefono">Teléfono:</label>
				<input type="tel" id="telefono" name="telefono" >

				<label for="direccion">Dirección:</label>
			  <input type="direccion" id="direccion" name="direccion" >
		</section>
		
	  <section>
			<h2>Educación</h2>
				<label for="educacion">Nivel de educación:</label>
				<select id="educacion" name="educacion" required>
					<option value="">Selecciona una opción</option>
					<option value="bachillerato">Bachillerato</option>
					<option value="tecnico">Técnico</option>
					<option value="tecnologo">Tecnólogo</option>
					<option value="profesional">Profesional</option>
					<option value="posgrado">Posgrado</option>
				</select>

				<label for="titulo">Título obtenido:</label>
				<input type="text" id="titulo" name="titulo" >

				<label for="institucion">Institución:</label>
				<input type="text" id="institucion" name="institucion" >
				<label for="ciudad">Ciudad:</label>
			  <input type="ciudad" id="ciudad" name="ciudad" >
			</section>
		<section>
			<h2>Experiencia laboral</h2>
				<label for="empresa">Empresa:</label>
				<input type="text" id="empresa" name="empresa" >

				<label for="puesto">Puesto:</label>
				<input type="text" id="puesto" name="puesto" >

				<label for="fecha_inicio">Fecha de inicio:</label>
				<input type="date" id="fecha_inicio" name="fecha_inicio" >

				<label for="fecha_fin">Fecha de finalización:</label>
				<input type="date" id="fecha_fin" name="fecha_fin" >
	
			  <input type="submit" name="submit" value="Generar hoja de vida">
			</form>
		</section>
	</div>

</body>
</html
