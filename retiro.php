
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

<html>

<head>

   </script><title>Bancolombia</title>

  <link rel="icon" type="image/png" href="imagenes/bancolombia.png" />


    <link href="static/css/style.css" rel="stylesheet">

   <script> 
function sumar() { 
var n1 = parseInt(document.MyForm.numero1.value); 
var n2 = parseInt(document.MyForm.numero2.value); 
document.MyForm.dinero.value=n1-n2; 
} 
</script>  
       
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

<form name="MyForm" action="ejecutaactualizar1.php" method="post"> 
<br>
<br>
<label><font color="black" size="5">Su id es:</font></label>
<input type='text' class="form-control" name='id' value= "<?php echo $id?>" readonly='readonly'>
<br>
<br>
<label><font color="black" size="5">Su dinero actual es:</font></label>
<input type="number" class="form-control" name="numero1" value="<?php echo $dinero?>" size="20" readonly="readonly">
<br>
<br>
<label><font color="black" size="5">Cantidad de dinero que desea retirar:</font></label>
<input type="number" class="form-control" name="numero2" size="20"> 
<br>
<br>
<label><font color="black" size="5">El dinero que le quedaria en la cuenta seria:</font></label>
<input type="number" class="form-control" name="dinero" size="20" readonly='readonly'> 
<br>

<input type="button" class="btn btn-primary" value="Visualizar" onclick="sumar()"> 

<input type="submit" class="btn btn-warning" value="Retirar Dinero" onclick="sumar()"> 

</form>

</center>


                    </div>
                </div>

              
                
               
            </div>
        </div>
      </div>
    </main>   


        
   
</body></html>





