<html>

<head>

	</script>
	<title>Banco Azul</title>

	<link rel="icon" type="image/png" href="imagenes/alaLogo.png" />


	<link href="static/css/style.css" rel="stylesheet">

	<style>

	/* The Modal (background) */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    /* Modal Content Box */
    .modal-content {
      background-color: #fefefe;
      margin: 4% auto 15% auto;
      border: 1px solid #888;
      width: 30%;
      padding-bottom: 20px;
    }
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

								<?php
								extract($_GET);
								require("conexion.php");

								$sql = "SELECT cuenta.ncta, cuenta.cod_cliente, cliente.nombre_cliente, SUM(transacciones.monto) AS saldo FROM cuenta, transacciones, cliente WHERE transacciones.ncta = '$id' AND cuenta.cod_cliente = '$cod' AND cliente.cod_cliente = '$cod'";
								
								$query = mysqli_query($mysqli, $sql);
								$arreglo = mysqli_fetch_array($query);
								$saldoActual =$arreglo[3]; 

								if ($saldoActual > 0) {

									echo "<script>alert('Usted si tiene dinero en su cuenta bancaria ')</script>";
									echo "<font color='black' size='5'>El Saldo de su cuenta bancaria </font>";
									echo "<br>";
									echo "<br>";

									echo '<form action="retiro.php" method="post">';  

									echo "<font color='black' size='4'>Numero de Cuenta</font><br><input type='text' class='form-control' name='id' value= ", $arreglo[0], " readonly='readonly'";
									echo "<br>";
									echo "<br>";
									echo "<font color='black' size='4'>Dinero actual</font><br><input type='text' class='form-control' name='saldo' value= ", $arreglo[3], " readonly='readonly'";
									echo "<br>";
									echo "<br>";
									echo "<br>";
									echo "<br>";
									echo "<a href='retiro.php'><input type='submit' value='Retirar dinero' class='btn btn-success'></a>";
									echo "<br>";
									echo "<br>";
									echo "<a href='midinero.php'><input type='button' class='btn btn-primary' value='regresar'> </a>";
									echo "</form>";

									
								} else {

									echo "<script>alert(fondos insuficientes')</script>";
									echo "(Usted no posee fondos suficiente para retirar)";
									echo "<br>";
									echo "<br>";
									echo "Dinero actual<br><input type='text' class='form-control' name='id' value= ", $arreglo[3], " readonly='readonly'";
									echo "<br>";
									echo "<br>";
									echo '<a href="midinero.php"><button>Volver</button></a>';
								}


								?>

							</center>



						</div>
					</div>




				</div>
			</div>
		</div>
	</main>




</body>

</html>