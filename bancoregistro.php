<?php

	$nombre=$_POST['nombre'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
    $tusuario= $_POST['tipoUsuario'];

	var_dump($nombre);
	var_dump($pass);
	var_dump($rpass);
	var_dump($tusuario);

	require "bancoconexion.php";
	$checkNit=mysqli_query($conexion,"SELECT * FROM cliente WHERE nit='$pass'");
	$check_nit=mysqli_num_rows($checkNit);
		if($pass==$rpass){
			if($check_nit>0){
				echo ' <script language="javascript">alert("Atencion, ya existe un usuario con el mismo NIT");</script> ';
				echo "<script>location.href='index.php'</script>";	
			}else{
				
				mysqli_query($conexion,"INSERT INTO cliente (cod_cliente, nit, nombre_cliente, rol)  SELECT MAX(cod_cliente)+1, '$pass', '$nombre', '$tusuario' FROM cliente");

				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='index.php'</script>";	
				
			}
			
		}else{
			echo 'NIT no coincide';
		}

	
?>