<?php

session_start();
	require "bancoconexion.php";
	$usuario=$_POST['codigo'];
	$pass=$_POST['pass'];

	$sql = "SELECT cod_cliente, nit, rol, nombre_cliente FROM cliente WHERE cod_cliente = '$usuario' AND  nit = '$pass'";
	$consulta = mysqli_query($conexion,$sql);
	$array = mysqli_fetch_assoc($consulta);

	$nivel = $array['rol'];
	var_dump($array);


	if (mysqli_num_rows($consulta)>0) {
		if ($nivel=='administrador') {
			$_SESSION['usuario']= $array['nombre_cliente'];
			$_SESSION['rol'] = $array['rol'];
			$_SESSION['cod'] = $array['cod_cliente'];

			echo '<script>alert("BIENVENIDO A BANCO AZUL ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		} else {
			$_SESSION['usuario']= $array['nombre_cliente'];
			$_SESSION['rol'] = $array['rol'];
			$_SESSION['codigo'] = $array['cod_cliente'];

			echo '<script>alert("BIENVENIDO A BANCO AZUL")</script> ';
			echo "<script>location.href='midinero.php'</script>";
		}
	} else {
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';		
		echo "<script>location.href='index.php'</script>";
	}
?>