  <?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:index.php");
  }elseif ($_SESSION['rol']==1) {
    header("Location:admin.php");
  }
  ?>

<html>

<head>

   </script><title>Bancolombia</title>

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
                    <div class="content"><a href="desconectar.php"><input  class="btn btn-danger" type="submit" name="submit" value="X"/></a>
                      <br>
                      <br>






<?php
require("conexion.php");
$sql=("SELECT * FROM dinero");
$query=mysqli_query($mysqli,$sql);
echo " <table class='table table-striped table-sm table-responsive-sm'>";
echo "<thead class='thead-dark'>";

  echo "<tr>";
echo "<th>Id</td>";
echo "<th>Mi dinero actual</td>";
echo "<th>Retiro</td>";

echo "</tr>";
  echo "</tr>";
?>
			  
<?php 
while($arreglo=mysqli_fetch_array($query)){

echo "<tbody class='table-warning text-dark'>";
echo "<td>$arreglo[0]</td>";
echo "<td>$arreglo[1]</td>";
echo "<td><a href='sacardinero.php?id=$arreglo[0]'>sacar dinero </td>";


}


?>

<?php
    extract($_GET);
    require("conexion.php");

    $sql="SELECT * FROM dinero ";
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row ($ressql)){
          $id=$row[0];
          $dinero=$row[1];

        }


?>

<?php


if($dinero<0){

echo "<center><font color='D10404' size='5'>Usted debe dinero, debe pagar lo que debe o su cuenta se cancelara en las proximas 24 horas</center>";


}else{

echo "<center><font color='068408' size='5'>La cuenta esta muy bien</font></center>";

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
   
</body></html>