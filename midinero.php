  <?php
  session_start();
  // session_start();
  // if (@!$_SESSION['user']) {
  //   header("Location:index.php");
  // }elseif ($_SESSION['rol']==1) {
  //   header("Location:admin.php");
  // }
  $codigo = $_SESSION['codigo'];
  $nCuenta = "";

  require("conexion.php");
  $sql = ("SELECT ncta FROM cuenta WHERE cod_cliente = '$codigo'");
  $query = mysqli_query($mysqli, $sql);
  $row = $query->fetch_assoc();
  $nCuenta = $row['ncta'];
  
  
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
              <div class="content"><a href="desconectar.php"><input class="btn btn-danger" type="submit" name="submit" value="X" /></a>
                <br>
                <br>
                <?php
                require("conexion.php");
                $sql = "SELECT cuenta.ncta, cuenta.cod_cliente, cliente.nombre_cliente, SUM(transacciones.monto) FROM cuenta, transacciones, cliente WHERE transacciones.ncta = '$nCuenta' AND cuenta.cod_cliente = '$codigo' AND cliente.cod_cliente = '$codigo'";
                $query = mysqli_query($mysqli, $sql);
                echo "<center><font color='068408' size='5'>Bienvenido a tu cuenta</font></center>";
                echo " <table class='table table-striped table-sm table-responsive-sm'>";
                echo "<thead class='thead-dark'>";

                echo "<tr>";
                echo "<th>Numero de Cuenta</td>";
                echo "<th>Cliente ID</td>";
                echo "<th>Nombre</td>";
                echo "<th>Saldo Real</td>";
                echo "<th></td>";
                echo "<th></td>";

                echo "</tr>";
                echo "</tr>";
                ?>
                <br>
                <br>

                <?php
                while ($arreglo = mysqli_fetch_array($query)) {

                  echo "<tbody class='table-warning text-dark'>";
                  echo "<td>$arreglo[0]</td>";
                  echo "<td>$arreglo[1]</td>";
                  echo "<td>$arreglo[2]</td>";
                  echo "<td>$$arreglo[3]</td>";
                  echo "<td><div class='content'><a href='sacardinero.php?id=$arreglo[0]&cod=$arreglo[1]'><input class='btn btn-danger' type='submit' name='submit' value='Retiro' /></a></td>";
                  echo "<td><div class='content'><a href='deposito.php?id=$arreglo[0]&cod=$arreglo[1]'><input class='btn btn-success' type='submit' name='submit' value='Deposito' /></a></td>";
                }


                ?>

                <?php
                extract($_GET);
                require("conexion.php");

                $sql = "SELECT * FROM transacciones ";
                $ressql = mysqli_query($mysqli, $sql);
                while ($row = mysqli_fetch_row($ressql)) {
                  $id = $row[0];
                  $dinero = $row[1];
                }


                ?>

                
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!----Estado de cuenta ---->
    <main role="main" class="container">
      <div class="row">
        <div class="col-12">
          <div id="home-box">
            <div>
              <br>
              <br>
              <?php              
              require("conexion.php");
              $sql2 = ("SELECT cuenta.ncta, cuenta.cod_cliente, transacciones.monto, transacciones.tipo, transacciones.fecha  FROM cuenta, transacciones WHERE transacciones.ncta = '$nCuenta' AND cuenta.ncta = '$nCuenta'");
              $query2 = mysqli_query($mysqli, $sql2);
              echo " <table class='table table-striped table-sm table-responsive-sm'>";
              echo "<thead class='thead-dark'>";

              echo "<tr>";
              echo "<th>Numero de Cuenta</td>";
              echo "<th>Cliente ID</td>";
              echo "<th>Transacciones</td>";
              echo "<th>Tipo</td>";
              echo "<th>Fecha</td>";
              echo "<th></td>";
              echo "<th></td>";

              echo "</tr>";
              echo "</tr>";

              ?>
              <br>
              <br>
              <?php
              echo "<center><font color='068408' size='5'>Historial de Transacciones</font></center>";
              while ($arreglo2 = mysqli_fetch_array($query2)) {

                echo "<tbody class='table-warning text-dark'>";
                echo "<td>$arreglo2[0]</td>";
                echo "<td>$arreglo2[1]</td>";
                echo "<td>$arreglo2[2]</td>";
                echo "<td>$arreglo2[3]</td>";
                echo "<td>$arreglo2[4]</td>";
                //echo "<td><a href='sacardinero.php?id=$arreglo[0]'>sacar dinero </td>";
              }

              ?>
              <br>
              <br>
            </div>
          </div>
        </div>
    </main>
  </body>

  </html>