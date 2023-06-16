<?php 
require "../database_producto/config.php";
require "../database_producto/databasepr.php";
$db= new Database();
$con =$db->conectar();
$con->exec("USE productos_bts");
$sql=$con->prepare("SELECT id,nombre,precio,descuento FROM productos WHERE activo=1");
$sql->execute();
$resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encom</title>
    <script src="../controladores_jss/drow.js"></script>
    <link rel="stylesheet" href="../css/publicidad.css">
    <link rel="stylesheet" href="../css/cat_carrousel.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/samsung.css">
    <link rel="stylesheet" href="../css/suscripcion.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/banner.css">
    <link rel="stylesheet" href="../css/ofertas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
</head>
<body>
    <header id="header_banner" background-color="#2980B9">
      
      <div id="banner_title">
      <div id="title_header">
              
              <img src="../banner_img/logo.png"  id="logo_header"alt="" height="40px" widht="200px">
    </div>
              </div>
        
      <div id="search">
        <div class="box">
          <div class="search-box">
            <input type="text" id="search-input" name="search-input" class="search-input">
          <label for="" class="search-label" id="icon">
          <i class="fa-solid fa-magnifying-glass"></i>
        </label>

          </div>

        </div>
      </div>
      <div id="shoppin_cart">
       
      </div>
    </header>
    <div id="banner_div">
      <div id="nav_menu">
        
        <ul id="list_links">
          <nav id="links">
           
          <li id="link" ><a href=""  class="all_categoria">CATEGORIAS</a></li>
                <li id="link"><a href="index(1).php" id="link">INICIO<i class="fa-sharp fa-solid fa-caret-down"></i></a></li>
                <li id="link"><a href="" id="link">VENDER<i class="fa-sharp fa-solid fa-caret-down"></i></a></li>
                <li id="link"><a href="login.php" id="link">INICIAR SESION</a></li>
                <li id="link"><a href="register.php" id="link">REGISTRARSE</i></a></li>
                <li id="link"><a href="" id="link">CARRITO</a></li>
          </nav> 
        </ul>
      </div>

    </div>
<div id="accesos_directas">
  <h2 class="acc"> Ir rapidamente a : </h2>
  <div class="acces"></div>
  <a href=""> Calzado,</a>
  <a href="">Moda,</a>
  <a href="">Tecnologia,</a>
  <a href="">Supermercado,</a>
  <a href="">Electrodomesticos,</a>
  <a href="">Hogar y muebles,</a>
  <a href="">Accesorios,</a>
  <a href="">Deportes,</a>
  <a href="">Construccion,</a>
  <a href="">Juegos y Jueguetes,</a>
  <a href="">Inmuebles.</a>

</div>
<div class="banner_todo">
  <div id="carouselExampleAutoplaying" id=""class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="">
          <img height="360px" src="https://http2.mlstatic.com/D_NQ_796422-MLA69670353112_052023-OO.webp" class="d-block w-100"  alt="...">
  
        </a>
      </div>
      <div class="carousel-item active">
        <a href="">
          <img height="360px" src="https://http2.mlstatic.com/storage/splinter-admin/o:f_webp,q_auto:best/1683556032592-home-desktop2.jpg" class="d-block w-100"  alt="...">
  
        </a>
      </div>
      <div class="carousel-item active">
        <a href="">
          <img height="360px" src="https://http2.mlstatic.com/storage/splinter-admin/o:f_webp,q_auto:best/1661969606550-main-slider-desktop-1600x3405mototxnueva.jpg" class="d-block w-100"  alt="...">
  
        </a>
      </div>
      <div class="carousel-item active">
        <a href="">
          <img height="360px" src="https://http2.mlstatic.com/storage/splinter-admin/o:f_webp,q_auto:best/1673889027628-msmodageneraldesktop.jpg" class="d-block w-100"  alt="...">
  
        </a>
      </div>
      <div class="carousel-item">
        <img height="360px" src="https://http2.mlstatic.com/D_NQ_605356-MLA69589256609_052023-OO.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img height="360px"src="https://http2.mlstatic.com/D_NQ_848548-MLA69592107987_052023-OO.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <section id="cat_carrousel">
    <div id="caw">
        
        <div id="cat">
            <box-icon color="#222" id="icon_"name='credit-card-alt'></box-icon>
            <h1 id="text_">Paga con tu tarjeta.</h1>
            <a href="" id="_en">Ver más</a>
        </div>
        <div id="cat2">
            <box-icon color="#222"id="icon_2" name='bank' type='solid' ></box-icon>
            <h1 id="text_">Paga con transferencia.</h1>
            <a href="" id="_en">Ver más</a>
        </div>
        <div id="cat3">
            <box-icon color="#222"id="icon_3"name='store'></box-icon>
            <h1 id="text_">Paga en puntos fisicos.</h1>
            <a href="" id="_en">Ver más</a>
        </div>
        <div id="cat4">
            <box-icon color="#222"id="icon_4"name='lock-alt'></box-icon>
            <h1 id="text_">Tu compra totalmente segura.</h1>
            <a href="" id="_en">Ver más</a>
        </div>
    </div>
  </section> 
  <h1 id="title_oferta">Ofertas</h1>
  <section id="carrousel_ofertas">
   <div class="carrousel">
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID = 2;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $descuento=$producto["descuento"];
    }
       ?>
             <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">
          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", "."); ?></h1>
            <h2 id="des_precio"><?php echo $descuento,   "% OFF";?></h2>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          
        </div>
      </div>
     
    </a>
    <div id="oferta1">
      <?php 
      $productID = 1;
      
      
      $imagen="https://http2.mlstatic.com/D_Q_NP_833246-MLA69342173627_052023-AB.webp";
      $producto = null;
      foreach ($resultado as $row) {
        if ($row["id"] == $productID) {
          $producto = $row;
          break;
        }
      }
      
      if ($producto) {
        $id = $producto["id"];
        $precio = $producto["precio"];
        $descuento=$producto["descuento"];
      }
      ?>
      <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">
          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", "."); ?></h1>
            <h2 id="des_precio"><?php echo $descuento,   "% OFF";?></h2>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          
        </div>
      </div>

    </a>
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID = 3;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_742663-MCO54742828201_032023-AB.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $descuento=$producto["descuento"];
    }
       ?>
             <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">
          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio,0, ".", "."); ?> 
          </h1>
          <h2 id="des_precio"><?php echo $descuento,   "% OFF";?></h2>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          
        </div>
      </div>

    </a>
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID = 4;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_924538-MCO69817798690_062023-AB.web";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $descuento=$producto["descuento"];
    }
       ?>
             <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">
          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio,0, ".", "."); ?></h1>
            <h2 id="des_precio"><?php echo $descuento,   "% OFF";?></h2>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          
        </div>
      </div>

    </a> 
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID = 5;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_998455-MCO68962240439_042023-AB.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $descuento=$producto["descuento"];
      $precio = $producto["precio"];
    }
       ?>
             <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">
          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio,0, ".", "."); ?></h1>
            <h2 id="des_precio"><?php echo $descuento,   "% OFF";?></h2>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          
        </div>
      </div>
    </a>    
  </div>
</section>
<div id="asdadsa">
  <div id="">
    <img id="samsung_banner" height="165px"src="https://http2.mlstatic.com/D_NQ_NP_850170-MLA54957136471_042023-OO.webp" alt="">
  </div>
  <div id="">
    <img id="samsung_banner2" height="165px"src="https://http2.mlstatic.com/D_NQ_NP_656354-MLA54962438026_042023-OO.webp" alt="">
  </div>
</div>
  <div id="suscripcion-section">
    
    <div id="suscripcion">
      <div id="info">
        <a href=""id="aaaa">  
          <h1  class="aa"> Suscribete para tener beneficio</h1>
  
        </a>
      </div>
      <div id="precio_suscripcion">
        <h1 class="aaa">$22.988/mes</h1>
      </div>
    </div>
    <div id="descripcion-suscripcion">
      <span id="d12">Consigue los mejores beneficios en </span>
      <div id="d13">
        <div id="d14">
         <div class="beneficios">
          <div class="img_bemeficios">
            <img id="img" src="https://http2.mlstatic.com/resources/frontend/statics/loyal/partners/widget-l6/dplus.svg" alt="">
          </div>
          <span id="text_bn">Disney+ sin cargo</span>
         </div>
         <div class="img_bemeficios">
            <img id="img" src="../banner_img/netflix_logo.jpg" alt="">
          </div>
          <span id="text_bn">Netflix por 8.000</span>
          <div class="img_bemeficios">
            <img id="img" src="https://http2.mlstatic.com/resources/frontend/statics/loyal/v2/truckgiftv4@2x.png" alt="">
          </div>
          <span id="text_bn2">Envios gratis y rapidos desde $90.000 y 40% OFF en envios de menos de 90.000</span>
         </div> 
        </div>
         
        </div>
        <div id="button_suscripcion">
          
            <a href=""  id="button"role="button">
              Suscribete
            </a>

          </div>
      </div>
      <section id="carrousel_ofertas">
   <div class="carrousel">
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID = 6;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_648110-MCO54617512628_032023-P.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $nombre=$producto["nombre"];
    }
    ?>
                 <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">
          <img height="224px"width="224px"
            src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", ".");?></h1>
            <br>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          <h3 id="title_producto"><?php echo $nombre; ?></h3>
          
        </div>
      </div>

    </a>
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID = 7;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_973345-MLA47781591382_102021-P.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $nombre=$producto["nombre"];
    }
    ?>
                     <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">
          <img height="224px"width="224px"
src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", ".");?></h1>
            <br>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          <h3 id="title_producto"><?php echo $nombre; ?></h3>
        </div>
      </div>

    </a>
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID = 8;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_679726-MLA53452158591_012023-P.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $nombre=$producto["nombre"];
    }
    ?>
                 <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">
          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", ".");?></h1>
            <br>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          <h3 id="title_producto"><?php echo $nombre; ?> </h3>

        </div>
      </div>

    </a>
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID = 9;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_605126-MLM51559383638_092022-P.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $nombre=$producto["nombre"];
    }
    ?>
                     <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">
          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", ".");?></h1>
            <br>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          <h3 id="title_producto"><?php echo $nombre; ?> </h3>
        </div>
      </div>

    </a> 
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID = 10;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_708665-MCO52169131424_102022-P.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $nombre=$producto["nombre"];
    }
    ?>
      <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">
          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", ".");?></h1>
            <br>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          <h3 id="title_producto"><?php echo $nombre; ?></h3>
        </div>
      </div>
    </a>    
  </div>
</section>
<div id="asdadsa">
  <div id="">
    <img id="samsung_banner" height="165px"src="https://http2.mlstatic.com/D_NQ_NP_929518-MLA44492438870_012021-OO.webp" alt="">
  </div>
  <div id="">
    <img id="samsung_banner2" height="165px"src="https://http2.mlstatic.com/D_NQ_NP_965692-MLA44492438880_012021-OO.webp" alt="">
  </div>
</div>
<section id="carrousel_ofertas">
   <div class="carrousel">
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID = 11;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_776429-MLA49982653825_052022-P.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $nombre=$producto["nombre"];
    }
    ?>
      <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">

          <img height="224px"width="224px"
  src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", ".");?></h1>
            <br>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          <h3 id="title_producto"><?php echo $nombre; ?></h3>
          
        </div>
      </div>

    </a>
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID =12 ;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_617468-MLA50417982845_062022-P.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $nombre=$producto["nombre"];
    }
    ?>
      <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">

          <img height="224px"width="224px"
src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", ".");?></h1>
            <br>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          <h3 id="title_producto"><?php echo $nombre; ?></h3>
        </div>
      </div>

    </a>
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID =13 ;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_737237-MLA49771097528_042022-P.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $nombre=$producto["nombre"];
    }
    ?>
      <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">

          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", ".");?></h1>
            <br>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          <h3 id="title_producto"><?php echo $nombre; ?></h3>

        </div>
      </div>

    </a>
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID =14 ;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_968239-MLA49706417428_042022-P.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $nombre=$producto["nombre"];
    }
    ?>
      <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">

          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", ".");?></h1>
            <br>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          <h3 id="title_producto"><?php echo $nombre; ?>  </h3>
        </div>
      </div>

    </a> 
    <a  id="enlace"href="">
      <div id="oferta1">
      <?php 
      $productID =15 ;
      
      
    $imagen="https://http2.mlstatic.com/D_Q_NP_865004-MLA48009568948_102021-P.webp";
    $producto = null;
    foreach ($resultado as $row) {
      if ($row["id"] == $productID) {
        $producto = $row;
        break;
      }
    }

    if ($producto) {
      $id = $producto["id"];
      $precio = $producto["precio"];
      $nombre=$producto["nombre"];
    }
    ?>
      <a  id="enlace"href="../productos_php/productos.php?id=<?php echo $productID?>&token=<?php echo hash_hmac("sha1",$productID,KEY_TOKEN);?>">

          <img height="224px"width="224px"src="<?php echo $imagen; ?>" alt="">
        <div id="oferta_pro_title">
          <div id="precio">
            <h1 id="title_precio">$<?php echo number_format($precio, 0, ".", ".");?></h1>
            <br>
            <span id="envio">Envio Gratis</span>
            <svg class="ui-item__full-icon" width="41" height="13" viewBox="0 0 41 13" xmlns="http://www.w3.org/2000/svg"><path fill-rule="nonzero" d="M2.628 0h5.255L5.255 4.643h4.38L2.628 13l1.751-5.571H0L2.628 0zm11.589 9.533h-1.959l1.674-7.515H19.5l-.376 1.69h-3.61l-.25 1.172h3.519l-.376 1.69h-3.53l-.66 2.963zm9.468.136c-2.334 0-3.484-1.105-3.484-2.682 0-.124.034-.383.057-.496l1.002-4.473h1.992l-.99 4.428c-.012.057-.034.18-.034.316.011.62.49 1.217 1.457 1.217 1.048 0 1.583-.654 1.776-1.533l.991-4.428h1.981l-.99 4.462c-.41 1.825-1.412 3.189-3.758 3.189zm10.118-.136h-5.01l1.673-7.515h1.959l-1.287 5.825h3.04l-.375 1.69zm6.678 0h-5.01l1.674-7.515h1.959l-1.287 5.825h3.04l-.376 1.69z"></path></svg>
          </div>
          <h3 id="title_producto"><?php echo $nombre; ?></h3>
        </div>
      </div>
    </a>    
  </div>
</section>
<div id="asdadsa">
<div id="">
  <img id="samsung_banner" height="165px"src="https://http2.mlstatic.com/D_NQ_NP_772321-MLA54010590735_022023-OO.webp" alt="">
</div>
<div id="">
  <img id="samsung_banner2" height="165px"src="https://http2.mlstatic.com/D_NQ_NP_682439-MLA54010590740_022023-OO.webp" alt="">
</div>
</div>

</div>
    </div>
    


</div>
<footer id="footer">
<div id="nav_footer">
  <ul id="navegation_menu">
    <li id="footer_p"><a class="aaaaa"href=""> Trabaja con nosotros</a></li>
    <li id="footer_p"><a class="aaaaa" href="">Terminos y condiciones</a></li>
    <li id="footer_p"><a class="aaaaa"href="">Como cuidamos tu privacidad</a></li>
    <li id="footer_p"><a class="aaaaa"href="">Accesibilidad</a></li>
    <li id="footer_p"><a class="aaaaa"href="">Ayuda/PQR</a></li>
    <li id="footer_p"><a class="aaaaa"href="">www.sic.gov.co</a></li>
  </ul>
</div>
<div id="nan">
  <small class="sdjk">Copyright ©2023 Automarket. Todos los derechos reservados.</small>
  <br>
  <small class="sdjk">Cucuta,Norte de Santander</small>

</div>
</footer>

<script src="https://kit.fontawesome.com/1e588a4fd9.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>