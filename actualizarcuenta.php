<?php
// 
session_start();
// if (@!$_SESSION['user']) {
//   header("Location:index.php");
// }elseif ($_SESSION['rol']==2) {
//   header("Location:index2.php");
// }
?>
<html>

<head>

	</script>
	<title>Banco Azul</title>

	<link rel="icon" type="image/png" href="imagenes/alaLogo.png" />


	<link href="static/css/style.css" rel="stylesheet">

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
								<?php
								extract($_GET);
								require "bancoconexion.php";

								$sql = "SELECT * FROM cliente WHERE cod_cliente=$id";
								$ressql = mysqli_query($conexion, $sql);
								while ($row = mysqli_fetch_array($ressql)) {
									$id = $row[0];
									$nombre = $row[1];
									$nit = $row[2];
									$rol = $row[3];
								}
								?>

								<form action="ejecutacuenta.php" method="post">
									Codigo<br><input type="text" class="form-control" name="id" value="<?php echo $id ?>" readonly="readonly"><br>
									Nombre<br> <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>"><br>
									NIT<br> <input type="text" class="form-control" name="nit" value="<?php echo $nit ?>"><br>
									Rol<br> <input type="text" class="form-control" name="rol" value="<?php echo $rol ?>"><br>
									<br>
									<input type="submit" value="Modificar" class="btn btn-warning">
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