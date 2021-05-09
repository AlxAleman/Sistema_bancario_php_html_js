<?php
$id = $_REQUEST['id'];
$saldo = $_REQUEST['saldo'];
$retiro = $_REQUEST['retiro'];

require("conexion.php");
$sql = "SELECT ncta, tipo, SUM(monto) AS saldo, fecha FROM transacciones WHERE ncta = '$id'";
								
$query = mysqli_query($mysqli, $sql);
$arreglo = mysqli_fetch_array($query);
$saldoActual =$arreglo[2];

$sql2 = "INSERT INTO transacciones (cod_transac, monto, tipo, ncta, fecha) SELECT MAX(cod_transac)+1, '$retiro', 'deposito', '$id', CURDATE() FROM transacciones";
mysqli_query($mysqli, $sql2);

	
echo '<script>alert("Deposito de '.$retiro.' Realizado!")</script> ';		
echo "<script>location.href='midinero.php'</script>";
