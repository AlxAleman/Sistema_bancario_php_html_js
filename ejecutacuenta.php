<?php
extract($_POST);
	require("conexion.php");
	$sql="UPDATE cliente SET nit='$nit', nombre_cliente='$nombre', rol='$rol' WHERE cod_cliente='$id'";
	$resent=mysqli_query($mysqli,$sql);
	if ($resent==null) {
		echo '<script>alert("ERROR AL ACTUALIZADA LA CUENTA ")</script> ';
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("CUENTA ACTUALIZADA")</script> ';		
		echo "<script>location.href='admin.php'</script>";		
	}
?>