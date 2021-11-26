<?php
	session_start();
	require '../Common/conexion.php';

	if (isset($_SESSION['user_id'])){
		$conn = createConnection();
		$records = $conn->prepare('SELECT id_usuario, usuario, password FROM usuario WHERE id_usuario = :id');
		$records->bindParam(':id', $_SESSION['user_id']);
		$records->execute();
		$results = $records->fetchAll();

		$user = '';

		if (count($results) > 0){
			$user = $results;
			var_dump($user);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv-"X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Universidad Tecnológica de Cancún</title>
</head>
<body>
	<h1>Universidad Tecnológica de Cancún</h1>
	<h2>Romero Martínez Juan Daniel y Ramirez Moo Joaquin</h2>
	<a href="/Login/login.php">Login</a>  <a href="/Login/logout.php">Cerrar sesión</a>
	<br>
	<p>Bienvenidos</p>
	<p>Ciclo Escolar 2021-2022</p>
	<a href="/Carreras/Carreras.php">Carreras</a>  <a href="/Estudiantes/Estudiantes.php">Estudiantes</a>

</body>
</html>


