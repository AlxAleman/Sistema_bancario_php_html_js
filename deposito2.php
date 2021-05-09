<?php
extract($_GET);

$id = $_REQUEST['id'];
$saldo = $_REQUEST['saldo'];
require "conexion.php";
$sql = "SELECT ncta, tipo, SUM(monto) AS saldo, fecha FROM transacciones WHERE ncta = '$id'";

$query = mysqli_query($mysqli, $sql);
$arreglo = mysqli_fetch_array($query);
$saldoActual = $arreglo[2];

?>

<html>

<head>

	</script>
	<title>Banco Azul</title>

	<link rel="icon" type="image/png" href="imagenes/alaLogo.png" />


	<link href="static/css/style.css" rel="stylesheet">



</head>
<style>
	#home-box {
		display: block;
		background: #D2D2D2;
		color: #fff;
		-webkit-border-top-left-radius: 3px;
		-webkit-border-top-right-radius: 3px;
		-moz-border-radius-topleft: 3px;
		-moz-border-radius-topright: 3px;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
	}

	#home-box .content {
		padding: 25px 30px;
		line-height: 22px;
	}

	#home-box .content h1 {
		font-size: 26px;
		font-weight: normal;
		line-height: 32px;
		text-align: center;
		margin-top: 0px;
		margin-bottom: 5px;
	}
</style>




</head>

<body class="bg-light">





	<main role="main" class="container">
		<div class="row">
			<div class="col-12">
				<div class="my-3 p-3 bg-white rounded box-shadow box-style">
					<div id="home-box">
						<div class="content">

							<center>

								<form name="MyForm" action="depositovalidar.php" method="post">
									<br>
									<br>
									<label>
										<font color="black" size="5">Su id es:</font>
									</label>
									<input type='text' class="form-control" name='id' value="<?php echo $id ?>" readonly='readonly'>
									<br>
									<br>
									<label>
										<font color="black" size="5">Su dinero actual es:</font>
									</label>
									<input type="number" class="form-control" name="saldo" value="<?php echo $saldoActual ?>" size="20" readonly="readonly">
									<br>
									<br>
									<label>
										<font color="black" size="5">Cantidad de dinero que desea Depositar:</font>
									</label>
									<input type="number" class="form-control" name="retiro" size="20">
									<br>
									<br>

									<input type="submit" class="btn btn-warning" value="Depositar Dinero">
									<a href="midinero.php"><input type="button" class="btn btn-primary" value="regresar"> </a>

								</form>

							</center>


						</div>
					</div>




				</div>
			</div>
		</div>
	</main>




</body>

</html>