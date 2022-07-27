<?php

require_once('conf/database.php');

$db = new Database();
die;
$con = $db->conectar();
$sql =$con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado  = $sql->fetchAll(PDO::FETCH_ASSOC);

while($mostrar =mysql_fetch_array($resultado)){
    echo $mostrar['id'];
    echo $mostrar['nombre'];
    echo $mostrar['precio'];
}

?>






<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B</title>
    <link rel="stylesheet" href="estilos/styles.css">
    <link rel="shortcut icon" href="src/imagenes/logoweb.png">
    <link rel="stylesheet" href="link rel=preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases7v5.8.1/css/all.css"
    integrity="sha484-50oBUHEmvpQ+11W4y57PTFmhCaxp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous"
    >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">  
    <link rel="stylesheet" href="estilos/estilosProductos.css">
    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
        <nav class="nav-main"> 
            <img src="src/imagenes/logoTuerca.png" alt="BicicletasChaco" class="nav-brand">
            <ul class="nav-menu">
                <li>
                    <a href="vendedor.html"> Vender</a>
                </li>
                <li>
                    <a href="Administrador.html"> Administrador</a>
                </li>
                <li>
                    <a href="index.html"> Comprar</a>
                </li>
                <li>
                    <a href="carrito.php" class="btn btn-primary">Carrito</a>
                </li>

            </ul>
        </nav>
       
        
   </div>
   <div class="titulo">
       <h1>Productos</h1>
   </div>

   <div class="cont">
    <div class="containerProductos">
        <h2>Bicicleta Mtb Todo Terreno Rin 12'' 14 16 18 Niño O Niña </h2>
        <img src="src/imagenes/biciNiño.png" alt="bicicleta para niño">
        <h3>$500.000</h3>
        <button class="botonAñadir">Agregar</button>
    </div>

       <div class="containerProductos">
            <h2>Juego de frenos mtb para bicicleta con rin 26</h2>
            <img src="src/imagenes/frenos.png" alt="bicicleta para niño">
            <h3>$30.000</h3>
            <button class="botonAñadir">Agregar</button>
        </div>

        <div class="containerProductos">
            <h2>Rines Shimano Ruta 10-11 Velocidades Rs100 20/24h</h2>
            <img src="src/imagenes/rines.PNG" alt="bicicleta para niño">
            <h3>$200.000</h3>
            <button class="botonAñadir">Agregar</button>
        </div>

        <div class="containerProductos">
            <h2>Grupo Shimano 105 Ruta R7000 11 Velocidades 52/36t </h2>
            <img src="src/imagenes/shimano.PNG" alt="bicicleta para niño">
            <h3>$350.000</h3>
            <button class="botonAñadir">Agregar</button>
        </div>

        <div class="containerProductos">
            <h2>Manubrio Sycr Xc Montaña Full Carbono Manillar Mtb Bicicleta </h2>
            <img src="src/imagenes/cabrilla.PNG" alt="bicicleta para niño">
            <h3>$100.000</h3>
            <button class="botonAñadir">Agregar</button>
        </div>

        <div class="containerProductos">
            <h2>Tenedor Suspensión Bicicleta Gw Rosca 26 '' F Disco/v-brake</h2>
            <img src="src/imagenes/tenedor.PNG" alt="bicicleta para niño">
            <h3>$70.000</h3>
            <button class="botonAñadir">Agregar</button>
        </div>

        <div class="containerProductos">
            <h2>Odómetro Velocímetro Bicicleta Inalámbrico Agua </h2>
            <img src="src/imagenes/Odometro.PNG" alt="bicicleta para niño">
            <h3>$25.000</h3>
            <button class="botonAñadir">Agregar</button>
        </div>

        <div class="containerProductos">
            <h2>Marco Gw Zebra En Aluminio Rin 29 Modelo 2020</h2>
            <img src="src/imagenes/marcogw.PNG" alt="bicicleta para niño">
            <h3>$230.000</h3>
            <button class="botonAñadir">Agregar</button>
        </div>
        <div class="containerProductos">
            <h2>Pacha Cassette Gw 9 Vel 11 - 42 Compatible Shimano Bicicleta</h2>
            <img src="src/imagenes/pacha.PNG" alt="bicicleta para niño">
            <h3>$60.000</h3>
            <button class="botonAñadir">Agregar</button>
        </div>

        <div class="containerProductos">
            <h2>Multiherramienta Bicicleta Con Despinador
            </h2>
            <img src="src/imagenes/multi.PNG" alt="bicicleta para niño">
            <h3>$50.000</h3>
            <button class="botonAñadir">Agregar</button>
        </div>

        <div class="containerProductos">
            <h2>Freno De Bicicleta En Resina V/brake Negro </h2>
            <img src="src/imagenes/frenosuwu.PNG" alt="bicicleta para niño">
            <h3>$26.000</h3>
            <button class="botonAñadir">Agregar</button>
        </div>
   </div>
  <footer>
      <div class="container-footer">
          <div class="box_footer">
              <div class="logo">
                  <img src="src/imagenes/logob.png" alt="">
                    <p class="terms">Almacen de Bicicletas "chacho" todo lo relacionado con mantenimiento y venta de Bicicletas al por mayor y al detal</p>
              </div>

          </div>
          <div class="box_footer">
              <h2>Servicios</h2>
              <a href="#">Venta de productos</a>
              <a href="#">mantenimiento</a>
              <a href="#">Engrase</a>

          </div>
          <div class="box_footer">
              <h2>Redes sociales</h2>
              <a href="#"><i class="fab fa-facebook-square"></i> facebook</a>
              <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
              <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
                <a href="$"></a>

          </div>

      </div>
  </footer>

 

</body>
</html>