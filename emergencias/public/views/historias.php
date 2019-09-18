<?php  
  session_start();
  if ($_SESSION["usuario"] != "1") {
    header("Location: ../../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Pacientes MediEmergencias</title>
      <!-- Bootstrap core CSS -->
      <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="../../css/simple-sidebar.css" rel="stylesheet">
      <link href="../../css/estilos.css" rel="stylesheet" >
      <script src="https:kit.fontawesome.com/2c36e9b7b1.js"></script>
    </head>

  <body>

    <div class="d-flex toggled" id="wrapper">

      <!-- Sidebar -->
      <div class="border-right" id="sidebar-wrapper">

        <div style="text-align: center; border-bottom: 2px solid #818181; background: #000;">
            <a href="home.php">
            	<img src="../../files/img/logoem2.jpg" style="width:240px; height: 62px">
            </a>
        </div>

        <div class="list-group list-group-flush">

          <a href="pacientes.php" class="list-group-item list-group-item-action enlaces">
            Paciente
          </a>

          <a href="historias.php" class="list-group-item list-group-item-action enlaces">
            Historia clinica
          </a>

          <a href="triage.php" class="list-group-item list-group-item-action enlaces">
            Alertas 
          </a>

          <a href="actualizar.php" class="list-group-item list-group-item-action enlaces">
            Actualizar perfil 
          </a>

          <a href="../models/cerrar_sesion.php" class="list-group-item list-group-item-action enlaces">
            Cerrar sesion 
          </a>


          <div style="text-align: center; padding: 4% 2%; background: #f2f2f2">
            <label for="">Ponte en contacto con nosotros</label>
            <i class="far fa-hand-point-down fa-2x"></i>
          </div>

          <div style="text-align: center; background: #f2f2f2; padding-bottom: 5%">
            <a href="https://wa.me/573197039293" target="blanck">
              <i class="fab fa-whatsapp fa-6x icono"></i>
            </a>
          </div>

          <div style="background: #f2f2f2; padding-bottom: 2%;  text-align: center;">
            MediEmergencias<br>
            &copy; Todos los derechos reservados <br>
            2019
          </div>
        </div>
      </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg color1" style="border-bottom: 2px solid #818181;">
        <button class="btn boton_menu" id="menu-toggle">
          <i class="fas fa-bars"></i>
        </button>

          <div class="perfil" style="margin-left: 1%;">
            <?php 
              echo "Bienvenido(a) ".$_SESSION["primer_nombre"]." ".$_SESSION["primer_apellido"];
            ?>
          </div>
      </nav>

    	<div class="container div2 color2">

  			<div class="row" style="background: #F2F2F2; border-bottom: 1px solid #000">
          <div class="col-sm-2">
            <a href="home.php">
              <img src="../../files/img/logoem2.jpg" class="logo">
            </a>
          </div>
          <div class="col-sm-10 titulos">
            Diligenciamiento de historia clinica.
          </div>  
        </div>


          <div class="row">
            <div class="col-sm-12" style="text-align: center; margin-top: 1%">
              <h5>Datos personales del paciente</h5>
            </div>
          </div>
          
		    <form action="../models/historias.php" method="POST">
          <div class="row espacio2" style="">
            <div class="col-sm-2">
              <label for="tp" class="col-form-label font" style="">Tipo de documento:</label>
            </div>
            
            <div class="col-sm-3">
              <?php  
                include("../models/tipo_documento.php");
              ?>
            </div>

            <div class="col-sm-2">
              <label for="ndocumento" class="col-form-label font" style="">Numero de documento:</label>
            </div>
            <div class="col-sm-2" style="">
              <input type="text" class="form-control inputs" id="ndocumento" placeholder="ingrese documento" name="documento" required>
            </div>

            <div class="col-sm-1">
              <label for="edad" class="col-form-label font" style="">Edad:</label>
            </div>

            <div class="col-sm-2" style="">
              <input type="text" class="form-control inputs" id="edad" placeholder="ingrese edad" name="edad" required>
            </div>
          </div>

  				<div class="row espacio2" style="">
            <div class="col-sm-1">
              <label for="nombres" class="col-form-label font" style="">Nombres:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="nombres" placeholder="ingrese nombres" name="nombres" required>
            </div>

            <div class="col-sm-1">
              <label for="apellidos" class="col-form-label font" style="">Apellidos:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="apellidos" placeholder="ingrese apellidos" name="apellidos" required>
            </div>

            <div class="col-sm-2">
              <label for="fnacimiento" class="col-form-label font">Fecha de nacimiento:</label>
            </div>

            <div class="col-sm-2" style="">
              <input type="date" class="form-control" id="fnacimiento" name="fnacimiento" required>
            </div>
          </div>

          <div class="row espacio2" style="">
            <div class="col-sm-1">
              <label for="ciudad" class="col-form-label font" style="">Ciudad:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="ciudad" placeholder="ingrese ciudad" name="ciudad" required>
            </div>

            <div class="col-sm-1">
              <label for="departamento" class="col-form-label font" style="">Departamento:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="departamento" placeholder="ingrese departamento" name="departamento" required>
            </div>

            <div class="col-sm-1">
              <label for="direccion" class="col-form-label font" style="">Direccion:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="direccion" placeholder="ingrese direccion" name="direccion" required>
            </div>
          </div>

          <div class="row espacio2" style="">
            <div class="col-sm-1">
              <label for="sexo" class="col-form-label font" style="">Sexo:</label>
            </div>

            <div class="col-sm-3" style="">
              <?php  
                include("../models/sexo.php");
              ?>
            </div>

            <div class="col-sm-1">
              <label for="ocupacion" class="col-form-label font" style="">Ocupacion:</label>
            </div>

            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="ocupacion" placeholder="ingrese ocupacion" name="ocupacion" required>
            </div>

            <div class="col-sm-1">
              <label for="ecivil" class="col-form-label font" style="margin-top: -10px">Estado civil:</label>
            </div>

            <div class="col-sm-2" style="">
              <?php  
                include("../models/estado_civil.php");
              ?>
            </div>
          </div>

          <div class="row" style="">
            <div class="col-sm-1">
              <label for="entidad" class="col-form-label font" style="">Entidad:</label>
            </div>

            <div class="col-sm-5" style="">
              <input type="text" class="form-control inputs" id="entidad" placeholder="ingrese entidad" name="entidad" required>
            </div>

            <div class="col-sm-1">
              <label for="regimen" class="col-form-label font" style="">Regimen:</label>
            </div>

            <div class="col-sm-5" style="">
              <?php  
                include("../models/regimen.php");
              ?>
            </div>
          </div>

          <div class="row espacio2" style="">
            <div class="col-sm-1">
              <label for="region" class="col-form-label font" style="">Region:</label>
            </div>
            <div class="col-sm-3" style="">
              <?php  
                include("../models/region.php");
              ?>
            </div>
            <div class="col-sm-1">
              <label for="escolaridad" class="col-form-label font" style="">Escolaridad:</label>
            </div>
            <div class="col-sm-3" style="">
              <input type="text" class="form-control inputs" id="escolaridad" placeholder="ingrese escolaridad" name="escolaridad" required>
            </div>
            <div class="col-sm-1">
              <label for="region" class="col-form-label font" style="">Alerta:</label>
            </div>
            <div class="col-sm-3" style="">
              <?php  
                include("../models/triage.php");
              ?>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12" style="text-align: center; margin-top: 1%">
              <h5>Anamnesis</h5>
            </div>
          </div>

          <div class="row espacio2">
            <div class="col-sm-2">
              <label for="motivo" class="col-form-label font" style="margin-left: 20px;">Motivo de consulta (sintomas):</label>
            </div>
            <div class="col-sm-10">
              <textarea name="motivo" id="motivo" cols="100" rows="2" style="width: 95%;"></textarea>
            </div>
          </div>

          <div class="row espacio2">
            <div class="col-sm-2">
              <label for="enfermedad" class="col-form-label font" style="margin-left: 20px;">Enfermedades:</label>
            </div>
            <div class="col-sm-10">
              <textarea name="enfermedad" id="enfermedad" cols="100" rows="2" style="width: 95%;"></textarea>
            </div>
          </div>

          <div class="row espacio2">
            <div class="col-sm-4">
              <label for="antecedentes" class="col-form-label font" style="margin-left: 40px; font-weight: bold">Antecedentes heredofamiliares</label>
            </div>
            <div class="col-sm-3">
              <label for="antecedentes" class="col-form-label font">Ingrese enfermedades heredadas:</label>
            </div>
            <div class="col-sm-5">
              <textarea name="antecedentes" id="antecedentes" cols="100" rows="2" style="width: 95%"></textarea>
            </div>
          </div>

          <div class="row espacio2">
            <div class="col-sm-4 espacio2">
              <label for="" class="col-form-label font" style="margin-left: 40px; font-weight: bold;">Antecedentes personales</label>
            </div>
            <div class="col-sm-3 espacio2">
              <label for="" class="col-form-label font">Habitos toxicos</label><br>
            </div>
            <div class="col-sm-5 espacio2">
              <input type="checkbox" name="toxico" value="alcohol" id="alcohol">
              <label for="alcohol">Alcohol</label>

              <input type="checkbox" name="toxico" value="tabaco" id="tabaco">
              <label for="tabaco">Tabaco</label>

              <input type="checkbox" name="toxico" value="drogas" id="drogas">
              <label for="drogas">Drogas</label>

              <input type="checkbox" name="toxico" value="infusiones" id="infusiones">
              <label for="infusiones">Infusiones</label>

              <input type="checkbox" name="toxico" value="ninguno" id="ninguno">
              <label for="ninguno">Ninguno</label>
            </div>
          </div>

            <div class="row espacio2">
              <div class="col-sm-1" style="">
                <label for="fisiologico" class="col-form-label font" style="margin-top: 10px;">Fisiologicos:</label>
              </div>
              <div class="col-sm-5" style="">
                <textarea name="fisiologico" id="fisiologico" cols="100" rows="2" style="width: 95%"></textarea>
              </div>
              <div class="col-sm-1" style="">
                <label for="examenes" class="col-form-label font" style="margin-top: 10px;">Examenes:</label>
              </div>
              <div class="col-sm-5" style="">
                <textarea name="examenes" id="examenes" cols="100" rows="2" style="width: 95%"></textarea>
              </div>
            </div>

  				<div class="row espacio" style="justify-content: center;">
  					<button type="submit" class="btn btn-sm btn-dark inputs">Enviar</button>
  				</div>
          <div class="row espacio2" style="justify-content: center; padding-bottom: 2%">
            <input type="reset" class="btn btn-sm btn-danger" value="Borrar">
          </div>
        </form>
		  </div>

    <br>
    <br>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

  </body>
</html>
