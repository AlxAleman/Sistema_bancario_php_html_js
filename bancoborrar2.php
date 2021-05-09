<?php
$id = $_REQUEST['id'];
require("conexion.php");
$sql = "DELETE FROM cliente WHERE cod_cliente = '$id'";								
$query = mysqli_query($mysqli, $sql);
echo '<script>alert("CLIENTE BORRADO DE BANCO AZUL")</script> ';		
echo "<script>location.href='admin.php'</script>";