<?php

    $to = "";
    $subject = "Nuevo usuario suscrito desde la web.";
    $message = "Usuario suscrito a novedades con el correo: " . htmlspecialchars($_POST['email']);
    $headers = "From:" . "Web". "\r\n";
    mail($to, $subject, $message, $headers);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="assets/favicon.png" rel="shortcut icon">
        <title>PRITEC Electronics</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" >
        <!-- Mis estilos -->
        <link rel="stylesheet" href="../css/style.css" >
        <!-- Navegador -->
        <link rel="stylesheet" href="../css/navoverlay.css" >
        <!-- Botón Up -->
        <link rel="stylesheet" href="../css/buttonup.css" >
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="../css/icomoon.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <style type="text/css">
              .row-formulario .active {
                  margin-top: 30px;
                  background: #fff;
                  padding: 60px;
                  -moz-box-shadow: 0px 0px 20px #e9eaed;
                  -webkit-box-shadow: 0px 0px 20px #e9eaed;
                  box-shadow: 0px 0px 20px #e9eaed;
                  }
                  p {
                      font-size: 14px;
                      color: #959595;
                      line-height: 24px;
                      font-weight: 400;
                  }

                  .volverdeformulario {
                      margin: 20px 0px 0px 0px;
                      background: #f7ac0c;
                      width: 150px;
                      outline: none;
                      border: none;
                      /* float: left;*/
                      height: 58px;
                      border-top-right-radius: 3px;
                      border-bottom-right-radius: 3px;
                      /* margin-left: -30px; */
                  }

        </style>

    </head>


  <body>

	<!--Formulario Row-->
	<div class="row-formulario">
			<div class="container">
					<div class="row">

						<div class="col-md-12 col-md-offset-3 active" style="text-align: center;">
							<img src="logo.jpg" class="logo"/>
							<h2>Gracias por suscribirse!</h2>
              <p>Recibirá información cuando publiquemos las siguientes novedades.</p>

				</div>
			</div>

  <div class="col-md-12" align="center">
    <button type="submit" class="volverdeformulario" onclick="location.href=''"/>
        <img src="volver.svg"/>
    </button>
  </div>


</div> <!-- end-row -->
</div> <!-- end-container -->
</div> <!-- end-row-buying -->


  </body>
</html>
