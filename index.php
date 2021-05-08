<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  </script>
  <title>Bancolombia</title>

  <link rel="icon" type="image/png" href="imagenes/alaLogo.png" />


  <link href="static/css/style.css" rel="stylesheet">

  <style>
    * {
      margin: 0px;
      padding: 0px;
      font-family: Helvetica, Arial, sans-serif;
    }

    /* Full-width input fields */

    /* Set a style for all buttons */
    button {
      background-color: #EA6D61;
      color: white;
      padding: 8px 20px;
      margin: 10px 26px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      width: 90%;
      margin-left: 5%;
      margin-right: 5%;
      font-size: 15px;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: -35px 0 12px 0;
      position: relative;
    }

    .avatar {
      width: 200px;
      height: 200px;
      border-radius: 50%;
    }

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

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 50px;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      animation: zoom 0.6s
    }

    @keyframes zoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
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


  <!----LOGIN ---->

  <div id="modal-wrapper" class="modal">

    <form class="modal-content animate" action="bancovalida.php" method="POST">

      <div class="imgcontainer">
        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
        <img src="imagenes/Banco-Tarjeta.png" width="200" alt="LikeFans" class="LikeFans">
        <h1 style="text-align:center">Banco Azul</h1>
      </div>

      <div class="container">
        <div class="col-sm-12 my-1">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text "><img src="imagenes/user.png" width="20"></div>
            </div>
            <input type="text" name="codigo" class="form-control" placeholder="Codigo de cliente" required="">
          </div>
        </div>
        <div class="col-sm-12 my-1">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><img src="imagenes/pass.png" width="20"></div>
            </div>
            <input type="password" name="pass" class="form-control" placeholder="Contraseña" required="">
          </div>
        </div>

        <input type="checkbox" required="" style="margin:15px 15px;">Recordarme
        <button type="submit" class="btn btn-warning">Ingresar</button>

      </div>

    </form>

  </div>

  <!---- FIN LOGIN ---->


  <!----REGISTRO ---->

  <div id="modal2-wrapper" class="modal">

    <form class="modal-content animate" action="bancoregistro.php" method="POST">

      <div class="imgcontainer">
        <span onclick="document.getElementById('modal2-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
        <img src="imagenes/Banco-Tarjeta.png" width="200" alt="LikeFans" class="LikeFans">
        <h1 style="text-align:center">Banco Azul</h1>
      </div>

      <div class="container">
        <div class="col-sm-12 my-1">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text "><img src="imagenes/user.png" width="20"></div>
            </div>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required="">
          </div>
        </div>
        <div class="col-sm-12 my-1">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><img src="imagenes/pass.png" width="20"></div>
            </div>
            <input type="text" name="pass" class="form-control" placeholder="Digite su NIT" required="">
          </div>
        </div>
        <div class="col-sm-12 my-1">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><img src="imagenes/pass.png" width="20"></div>
            </div>
            <input type="text" name="rpass" class="form-control" placeholder="Vuelva a digitar su NIT" required="">
          </div>
        </div>
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text "><img src="imagenes/identidad.png" width="20"></div>
            </div>
            <select class="form-control" name="tipoUsuario" required="">
              <option value="cliente">Cliente</option>
              <option value="administrador">Administrador</option>
            </select>
          </div>
        </div>

        <input type="checkbox" style="margin:15px 15px;">Recordarme
        <button type="submit" class="btn btn-warning">Registro</button>

      </div>

    </form>

  </div>

  <!----FIN REGISTRO ---->


  <main role="main" class="container">
    <div class="row">
      <div class="col-12">
        <div class="my-3 p-3 bg-white rounded box-shadow box-style">
          <div id="home-box">
            <div class="content">
              <h1 style="font-size:x-large; color:black; ">Banco Azul</h1>
              <p class="mt-3 text-left"><img src="imagenes/bancoAzul.png" width="500" class="img-fluid float-left" alt="LikeFans">
              <h5 style="color:black; ">
                Somos el Banco de salvadoreños que, a través de servicios financieros y atención personalizada, impulsa los grandes comienzos y contribuye al desarrollo de nuestro país.</h5>
              </p>
              <div class="row">
                <div class="col">
                  <a class="nav-link" onclick="document.getElementById('modal-wrapper').style.display='block'"><button class="btn btn-warning">INGRESAR</button></a>
                </div>
                <div class="col">
                  <a class="nav-link" onclick="document.getElementById('modal2-wrapper').style.display='block'"><button class="btn btn-warning">REGISTRARSE</button></a>
                </div>
              </div>


              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>