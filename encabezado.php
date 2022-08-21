<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">  <!-- llamamos el diseño que se uso "Bootstrap" -->
</head>

<!-- creamos un stilo por css para darle color a toda la pagina -->
<style>
.bg-encabezado{
    background: #ABF5E4   ;
    background: linear-gradient(to right,  #ABF5E4, #f1f3e3  );
  }
  #centrador{
  text-align: center;
  width: 400px;
  height: 400px;
  background-color: red;
}

</style>

    <body>
    <header>
        <!-- creamos una divicion para darle forma y diseño al encabezado  -->
        <div>
            <nav class="navbar navbar-expand-lg fixed-top bg-encabezado mb fst-italic fw-bolder shadow rounded">
                <div class="container-fluid w-80">  <!-- Inicio del div contenedor principal-->
                    <a class="navbar-brand"> <!-- creamos la parte de la imagen -->
                        <img src="img/logoferre.png" alt="" width="40" height="28" class="d-inline-block align-text-top">Ferreteria™ Los Ing's
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- Contenedor para generar efecto menu -->
                        <u1 class="navbar-nav me-auto mb-2 mb-lg-0">
                            <!-- creamos los titulos de nuestro menu -->
                            <li class="nav-item"><a class="nav-link" href="registrar.php">Alta de Productos Ferreteria™</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php">Inventario Ferreteria™</a></li>        
                        </u1>
                    </div> <!-- Cierre del div efecto menu -->
                </div> <!-- Cierre del div contenedor principal -->
            </nav>
        </div>
        <div class="container w-120 mt-5 shadow rounded bg-encabezado"> <!-- contenedor con titulo de encabezado  y para el esapcio entre el menu  -->
            <div class="row">
                <h3 class="text-center fst-italic"></h3>
            </div>
        <div> <!-- cierre de la primera division del contenedor -->
            <!-- otra divicion con contenedor para los datos que van dentro del encabezado -->
        <div class="container w-120 mt-2  shadow rounded bg-encabezado">
            <div class="row">
                <h2 class="text-center fst-italic">Unidad III. Resultado de aprendizaje</h2>
                <h4 class="text-center fw-bold">Presenta:</h4>
                <h5 class="text-center fst-italic">Jordan López Estrada</h5>
                <h5 class="text-center fst-italic">Martín Romeo Trejo Domínguez</h5>
            </div>
        <div> <!-- cierre de la segunda division del contenedor -->
        </header>
    </body>
</html>
