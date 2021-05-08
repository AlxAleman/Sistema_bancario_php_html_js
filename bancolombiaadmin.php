<?php
// session_start();
// if (@!$_SESSION['user']) {
//   header("Location:index.php");
// }elseif ($_SESSION['rol']==2) {
//   header("Location:index2.php");
// }
?>
<html>

<head>

   </script><title>Banco Azul</title>

  <link rel="icon" type="image/png" href="imagenes/bancolombia.png" />


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

        require("bancoconexion.php");
        $sql=("SELECT * FROM cuenta");
  
        $query=mysqli_query($conexion,$sql);

        echo " <table class='table table-striped table-sm table-responsive-sm'>";
          echo "<thead class='thead-dark'>";
                      echo "<tr>";

            echo "<th>Id</th>";
            echo "<th>Nombre</th>";
            echo "<th>contraseña</th>";
            echo "<th>Correo</th>";
            echo "<th>T.documento</th>";
            echo "<th>Documento</th>";
            echo "<th>Contraseña admin</th>";
            echo "<th>Rol</th>";
            echo "<th>Editar</th>";
            echo "<th>Borrar</th>";
          echo "</tr>";
  echo "<tr>";

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody class='table-warning text-dark'>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";
              echo "<td>$arreglo[6]</td>";
              echo "<td>$arreglo[7]</td>";


echo "<td><a href='actualizarcuenta.php?id=$arreglo[0]'><img src='imagenes/modificar.png' width='60' class='img-rounded'></td>";
echo "<td><a href='bancolombiaadmin.php?id=$arreglo[0]&idborrar=2'><img src='imagenes/tarjetaborrar.svg' width='60' class='img-rounded'/></a></td>";
            

            
          echo "</tr>";
        }

        echo "</table>";

          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM cuentas WHERE id=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("BANCOLOMBIA A ELIMINADO A ESTE USUARIO")</script> ';
            echo "<script>location.href='bancolombiaadmin.php'</script>";
          }

      ?>
    </center>


</div>
</div>
</div>
</div>
</div>
</main>

<br>
<br>
<br>



<main role="main" class="container">
<div class="row">
<div class="col-12">
<div class="my-3 p-3 bg-white rounded box-shadow box-style">
<div id="home-box">
<div class="content">


<center>

      <?php

        require("bancoconexion.php");
        $sql=("SELECT * FROM dinero");
  
        $query=mysqli_query($mysqli,$sql);

        echo " <table class='table table-striped table-sm table-responsive-sm'>";
          echo "<thead class='thead-dark'>";
                      echo "<tr>";

            echo "<th>Id</th>";
            echo "<th>Dinero</th>";
            echo "<th>Editar</th>";
            echo "<th>Borrar</th>";
          echo "</tr>";
  echo "<tr>";

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody class='table-warning text-dark'>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";


echo "<td><a href='actualizardinero.php?id=$arreglo[0]'><img src='imagenes/modificar.png' width='60' class='img-rounded'></td>";
echo "<td><a href='bancolombiaadmin.php?id=$arreglo[0]&idborrar=2'><img src='imagenes/tarjetaborrar.svg' width='60' class='img-rounded'/></a></td>";
            

            
          echo "</tr>";
        }

        echo "</table>";

          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM dinero WHERE id=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("BANCOLOMBIA A ELIMINADO A ESTE USUARIO")</script> ';
            echo "<script>location.href='bancolombiaadmin.php'</script>";
          }

      ?>
    </center>


</div>
</div>
</div>
</div>
</div>
</main>



        
   
</body></html>