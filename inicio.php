  <?php
  // session_start();
  // if (@!$_SESSION['user']) {
  //   header("Location:index.php");
  // }elseif ($_SESSION['rol']==1) {
  //   header("Location:admin.php");
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


    <?php
    extract($_GET);
    require("conexion.php");

    $sql = "SELECT * FROM cuenta ";
    $ressql = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_row($ressql)) {
      $id = $row[0];
      $dinero = $row[1];
    }


    ?>

    <?php
    extract($_GET);
    require("conexion.php");

    $sql = "SELECT * FROM cuenta";
    $ressql = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_row($ressql)) {
      $id = $row[0];
      $dinero = $row[1];
    }


    ?>

    <?php

    if ($dinero < 1) {



      echo '<main role="main" class="container">';
      echo '<div class="row">';
      echo '<div class="col-12">';
      echo '<div class="my-3 p-3 bg-white rounded box-shadow box-style">';
      echo '<div id="home-box">';
      echo '<div class="content"><a href="desconectar.php"><input  class="btn btn-danger" type="submit" name="submit" value="X"/></a>';
      echo '<form method="post" action="midinero.php" ><br>';
      echo '<div class="form-group">';
      echo "<center><font color='black' size='7'><p class='small text-uppercase'>BIENVENIDO</p></font></center>";
      echo '<br>';
      echo '<center><img src="imagenes/bancoAzul.png" width="500" height="100"></center>';
      echo '<br>';
      echo '<center><font color="black" size="5">Realiza tu primera transacción</font></center>';
      echo '<br>';
      echo '<center><font color="black" size="5">Este es un bono</font></center>';
      echo '<br>';
      echo '<center>';
      echo '<label style="font-size: 14pt; color:  black;"><b>Solo puedes ingresar un monto de hasta $100.000 Dolares USD</b></label><br>';
      echo '<input type="number" name="dinero" class="btn btn- "  placeholder="Dinero" required="" />';
      echo '</center>';
      echo '</div>';
      echo '<center>';
      echo '<input  class="btn btn-warning" type="submit" name="submit" value="Ingresar bono"/>';
      echo '</center>';
      echo '</form>';
      echo '</div>';
      echo '</div> ';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</main>';
    } else {


      echo '<main role="main" class="container">';
      echo '<div class="row">';
      echo '<div class="col-12">';
      echo '<div class="my-3 p-3 bg-white rounded box-shadow box-style">';
      echo '<div id="home-box">';
      echo '<div class="content"><a href="desconectar.php"><input  class="btn btn-danger" type="submit" name="submit" value="X"/></a>';
      echo '<div class="form-group">';
      echo "<center><font color='black' size='7'><p class='small text-uppercase'>BIENVENIDO </p></font></center>";
      echo '<br>';
      echo '<center><img src="imagenes/bancoAzul.png" width="500" height="100"></center>';
      echo '<br>';

      echo '<br>';

      echo '<br>';
      echo '<center>';
      echo '<a href="midinero.php"><button class="btn btn-warning"> Ingresar </button></a>';
      echo '</center>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</main>';
    }




    ?>




  </body>

  </html>