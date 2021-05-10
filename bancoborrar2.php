<?php

    $id = $_REQUEST['id'];
    require("conexion.php");

    var_dump($id);

    $sql = "SELECT * FROM cuenta WHERE cod_cliente = '$id'";
 	$query = mysqli_query($mysqli, $sql);
    $arreglo = $query->fetch_assoc();
    $nCuenta = $arreglo['ncta'];

    var_dump($nCuenta);

    $sql2 = "DELETE FROM transacciones WHERE ncta = '$nCuenta'";
    $sql3 = "DELETE FROM cuenta WHERE cod_cliente = '$id'";
    $sql4 = "DELETE FROM cliente WHERE cod_cliente = '$id'";

    $query2 = mysqli_query($mysqli, $sql2);
    $query3 = mysqli_query($mysqli, $sql3);
    $query4 = mysqli_query($mysqli, $sql4);

    echo '<script>alert("CLIENTE DE BANCO AZUL ELIMINADO")</script> ';		
    echo "<script>location.href='admin.php'</script>";
?>