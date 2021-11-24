<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>tIntegrador</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.buenosaires.gob.ar/educacion/codocodo/el-programa">
                <img src="img/codoacodo.png" height="75px" alt="logo codo a codo">
                <span>Conf Bs As</span>
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">La conferencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Los oradores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">El lugar y la fecha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cónviertete en orador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  green-text" href="#buyTicket" tabindex="-1" aria-disabled="true">Comprar
                        tickets</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <!--Formulario -->
        <section class="my-4" id="buyTicket">


            <?php
$enviado = false;

if (isset($_GET['enviado'])) {
    $enviado = $_GET['enviado'];
}

if (!$enviado) {?>

    <div class="section-title">
            <h6><span>ID</span></h6>
            <h2>REGISTRO</h2>
    </div>

            <form class="col-lg-6 col-md-12 m-auto px-4" action="envio.php" method="post" autocomplete="off">
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre"
                            required="">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido"
                        required="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" name="dni" placeholder="DNI" required="">
                    </div>
                    <div class="col">
                        <input type="numer" class="form-control" name="telefono" placeholder="Telefono" required="">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="correo" rows="3" placeholder="correo" required="">
                </div>
                <div class="mb-3">

                <label for="ContactContrasena">Click en el ojo para mostrar / ocultar</label>

                    <span id="show_password" type="button" onclick="mostrarPassword()" class="fa fa-eye-slash icon"></span>

                    <input type="password" class="form-control" name="clave" id="password" rows="3" placeholder="Password" pattern="^(?=(?:.*\d){2})(?=(?:.*[A-Z]){1})\S{5,}$"
                    title="Una contraseña válida debe contener al menos dos números, una MAYÚSCULA, y debe tener una longitud mínima de 5 caracteres" required="">
                </div>
                <br>
                <div class="row mb-3">
                    <div class="col">
                        <button type="reset" class="btn text-white green form-control"
                            onclick="clear()">Borrar</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn text-white green form-control"
                            id="registrarse">Registrarse</button>
                    </div>
                </div>
            </form>
            <?php
} else {
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
    }

    ?>

 <!-- CONTENIDO HTML SALUDO-->

        <p> Bienvenido  <?php echo "$nombre $apellido " ?>  <a class="nav-link  green-text" href="https://tpintegrador-registro-blog.000webhostapp.com/ingresar_al_blog.php"
            tabindex="-1" aria-disabled="true">Ingresa a nuestro Blog de Noticas</a></p>

            <?php
}
?>
        </section>

    </div>

    <footer class="navbar background-gradient footer">
        <nav class="container-fluid col-lg-10">
            <a href="#" class="nav-link">Preguntas<br>frecuentes</a>
            <a href="#" class="nav-link">Contáctanos</a>
            <a href="#" class="nav-link">Prensa</a>
            <a href="#" class="nav-link">Conferencias</a>
            <a href="#" class="nav-link">Términos y<br>condiciones</a>
            <a href="#" class="nav-link">Privacidad</a>
            <a href="#" class="nav-link">Estudiantes</a>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

       <!--Inicio Contraseña Click en el ojo para mostrar / ocultar-->
  <script type="text/javascript">
    function mostrarPassword() {
      var cambio = document.getElementById("password");
      if (cambio.type == "password") {
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
      } else {
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
      }
    }

    $(document).ready(function() {
      //CheckBox mostrar contraseña
      $('#ShowPassword').click(function() {
        $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
      });
    });
  </script>

  <!--Fin Contraseña Click en el ojo para mostrar / ocultar-->
</body>

</html>
