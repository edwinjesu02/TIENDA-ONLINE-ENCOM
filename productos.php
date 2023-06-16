<?php
require "../database_producto/config.php";
require "../database_producto/databasepr.php";
$db = new Database();
$con = $db->conectar();
$id = isset($_GET["id"]) ? $_GET["id"] : "";
$token = isset($_GET["token"]) ? $_GET["token"] : "";

if ($id == "" || $token == "") {
  echo "Error al procesar la petición";
  exit;
} else {
  $token_tmp = hash_hmac("sha1", $id, KEY_TOKEN);
  if ($token == $token_tmp) {
    $con->exec("USE productos_bts");
    $sql = $con->prepare("SELECT id, nombre, descripcion, precio,cantidad FROM productos WHERE id=? AND activo=1 LIMIT 1");
    $sql->execute([$id]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);

    if ($row) {
      $nombre = $row["nombre"];
      $descripcion = $row["descripcion"];
      $precio = $row["precio"];
      $cantidadDisponible = $row["cantidad"];
      $urls = array(
        "https://ejemplo.com/imagen1.jpg",
        "https://ejemplo.com/imagen2.jpg",
        "https://ejemplo.com/imagen3.jpg"
      );

    } else {
      echo "El producto no existe o no está activo";
      exit;
    }
  } else {
    echo "Error al procesar la petición";
    exit;
  }
}
$con->exec("USE productos_bts");
$sql = $con->prepare("SELECT nombre FROM productos WHERE id=? AND activo=1 LIMIT 1");
$sql->execute([$id]);
$row = $sql->fetch(PDO::FETCH_ASSOC);

if ($row) {
  $nombre = $row["nombre"];
} else {
  echo "El producto no existe o no está activo";
  exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="../controladores_jss/drow.js"></script>
    <link rel="stylesheet" href="../css/publicidad.css">
    <link rel="stylesheet" href="../css/cat_carrousel.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="producto.css">
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
<script src="https://kit.fontawesome.com/1e588a4fd9.js" crossorigin="anonymous"></script>
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
                <li id="link"><a href="../html/index.php" id="link">INICIO<i class="fa-sharp fa-solid fa-caret-down"></i></a></li>
                <li id="link"><a href="" id="link">VENDER<i class="fa-sharp fa-solid fa-caret-down"></i></a></li>
                <li id="link"><a href="../html/login.php" id="link">INICIAR SESION</a></li>
                <li id="link"><a href="" id="link">REGISTRARSE</i></a></li>
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
    <main >
      <div id="body">

        <div class="detalles_producto_section">
          <div class="gallery_img">
            <span class="galery_img_product">
              <div id="border_img_product">
                <div id="parametros_img"> 
                <?php
              // URLs de las imágenes asociadas a cada ID de producto
              $imagenes = array(
                "1" => array(
                  "https://http2.mlstatic.com/D_Q_NP_606160-MLA53446532444_012023-R.webp",
                  "https://http2.mlstatic.com/D_Q_NP_674592-MLA53446487968_012023-R.webp",
                  "https://ejemplo.com/imagen1-3.jpg"
                ),
                "2" => array(
                  "https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "3" => array(
                  "https://http2.mlstatic.com/D_Q_NP_742663-MCO54742828201_032023-AB.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "4" => array(
                  "https://http2.mlstatic.com/D_Q_NP_839842-MCO69817488836_062023-R.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "5" => array(
                  "https://http2.mlstatic.com/D_Q_NP_998455-MCO68962240439_042023-AB.webpp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "6" => array(
                  "https://http2.mlstatic.com/D_Q_NP_648110-MCO54617512628_032023-P.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "7" => array(
                  "https://http2.mlstatic.com/D_Q_NP_973345-MLA47781591382_102021-R.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "8" => array(
                  "https://http2.mlstatic.com/D_Q_NP_679726-MLA53452158591_012023-R.webp",
                  "https://http2.mlstatic.com/D_Q_NP_674592-MLA53446487968_012023-R.webp",
                  "https://ejemplo.com/imagen1-3.jpg"
                ),
                "9" => array(
                  "https://http2.mlstatic.com/D_NQ_NP_605126-MLM51559383638_092022-O.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "10" => array(
                  "https://http2.mlstatic.com/D_Q_NP_742663-MCO54742828201_032023-AB.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "11" => array(
                  "https://http2.mlstatic.com/D_Q_NP_776429-MLA49982653825_052022-P.webpp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "12" => array(
                  "https://http2.mlstatic.com/D_Q_NP_617468-MLA50417982845_062022-P.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "13" => array(
                  "https://http2.mlstatic.com/D_Q_NP_737237-MLA49771097528_042022-P.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "14" => array(
                  "https://http2.mlstatic.com/D_Q_NP_968239-MLA49706417428_042022-P.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                // Agrega más URLs de imágenes para los IDs restantes
                // ...
                "15" => array(
                  "https://http2.mlstatic.com/D_Q_NP_865004-MLA48009568948_102021-P.webp",
                  "https://ejemplo.com/imagen15-2.jpg",
                  "https://ejemplo.com/imagen15-3.jpg"
                )
              );
              
              // ID del producto actual
              $idProducto = isset($_GET["id"]) ? $_GET["id"] : "";
              
              // Verificar si el ID del producto tiene imágenes asociadas
              if (array_key_exists($idProducto, $imagenes)) {
                $urls = $imagenes[$idProducto];
                
                // Mostrar la primera imagen asociada al producto
                $url = reset($urls); // Obtiene el primer elemento del arreglo
                echo '<img src="' . $url . '" alt="Imagen" width="44" height="44">';
              } else {
                echo "No se encontraron imágenes para el producto actual";
              }
              ?>
                </div>
              </div>
              <br>
              <div id="border_img_product">
                <div id="parametros_img"> 
                  <?php
              // URLs de las imágenes asociadas a cada ID de producto
              $imagenes = array(
                "1" => array(
                  "https://http2.mlstatic.com/D_Q_NP_606160-MLA53446532444_012023-R.webp",
                  "https://http2.mlstatic.com/D_Q_NP_674592-MLA53446487968_012023-R.webp",
                  "https://ejemplo.com/imagen1-3.jpg"
                ),
                "2" => array(
                  "https://http2.mlstatic.com/D_Q_NP_736635-MCO69510258187_052023-R.webp",
                  "https://http2.mlstatic.com/D_Q_NP_736635-MCO69510258187_052023-R.webp"
                ),
                "3" => array(
                  "https://http2.mlstatic.com/D_Q_NP_736635-MCO69510258187_052023-R.webp",
                  "https://http2.mlstatic.com/D_Q_NP_701111-MCO52238846449_112022-R.webp"
                ),
                "4" => array(
                  "https://http2.mlstatic.com/D_Q_NP_839842-MCO69817488836_062023-R.webp",
                  "https://http2.mlstatic.com/D_NQ_NP_924538-MCO69817798690_062023-O.webp",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "5" => array(
                  "https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp",
                  "https://http2.mlstatic.com/D_Q_NP_998455-MCO68962240439_042023-AB.webp",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "6" => array(
                  "https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp",
                  "https://http2.mlstatic.com/D_Q_NP_786797-MCO69822678164_062023-R.webp",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "7" => array(
                  "https://http2.mlstatic.com/D_NQ_NP_845949-MLA47781634244_102021-O.webp",
                  "https://http2.mlstatic.com/D_Q_NP_845949-MLA47781634244_102021-R.webp",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "8" => array(
                  "https://http2.mlstatic.com/D_Q_NP_839842-MCO69817488836_062023-R.webp",
                  "https://http2.mlstatic.com/D_Q_NP_723488-MLA53452109718_012023-R.webp",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "9" => array(
                  "https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp",
                  "https://http2.mlstatic.com/D_Q_NP_827849-MLM51559383642_092022-R.webpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "10" => array(
                  "https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp",
                  "https://http2.mlstatic.com/D_Q_NP_743487-MCO52169126942_102022-R.webp",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "11" => array(
                  "https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp",
                  "",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "12" => array(
                  "https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp",
                  "https://http2.mlstatic.com/D_Q_NP_752701-MLA50496949394_062022-R.webp",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "13" => array(
                  "https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp",
                  "https://http2.mlstatic.com/D_Q_NP_749218-MLA49771088772_042022-R.webp",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "14" => array(
                  "https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                // Agrega más URLs de imágenes para los IDs restantes
                // ...
                "15" => array(
                  "https://ejemplo.com/imagen15-1.jpg",
                  "https://http2.mlstatic.com/D_Q_NP_791101-MLA48009639724_102021-R.webpg",
                  "https://ejemplo.com/imagen15-3.jpg"
                  )
                );
                $idProducto = isset($_GET["id"]) ? $_GET["id"] : "";
                
                // Verificar si el ID del producto tiene imágenes asociadas
                if (array_key_exists($idProducto, $imagenes)) {
                  $urls = $imagenes[$idProducto];
                  
                  // Mostrar la segunda imagen asociada al producto si existe
                  if (isset($urls[1])) {
                    $url2 = $urls[1]; // Segunda imagen
                    echo '<img src="' . $url2 . '" alt="Imagen" width="44" height="44">';
                  } else {
                    echo "No se encontró la segunda imagen para el producto actual";
                  }
                } else {
                  echo "No se encontraron imágenes para el producto actual";
                }
              ?>
                </div>
              </div>
            </span>
          </div>
          <figure id="galery_img">
            <div id="pago_pr">
              <p class="ccc">Hasta 48 cuotas</p>
              <div class="metodos">
                <div class="contenedor_logo">
                <div class="logo1"></div>
                </div>
                <div class="contenedor_logo">
                <div class="logo2"></div>
                </div>
                <div class="contenedor_logo">
                <div class="logo3"></div>
                </div>
              </div>
              <div id="metodos_info">
                <a href="" class="a_metodos">Mas informacion</a>
              </div>
              <div class="ubicacion_product-o">
             
                
              <p class="ui-color33">Envio gratis a nivel nacional <i class="fa-sharp fa-solid fa-truck"></i></p>
              <p class="ui-color2">Conoce los tiempos y las formas de envio.</p>
              <div class="shipping-info">
              <a href="" class="ui-enlace2">
               
                Calcular cuando llega
                <i class="fa-solid fa-location-dot"></i>
              </a>
            </div>
            <div class="cantidad_pr">
              <p class="ui-color4">Stock disponible</p>
              <div class="button_ui">
                <button class="button_ui1">
                  <span class="buttoncont">
                    <span class="title_cantidad">Cantidad:</span>
                    <span class="cantidad_pr2"><?php echo  $cantidadDisponible;  ?></span>
                    <span class="title_cantidad2"> disponibles</span>
                  </span>
                </button>
              </div>

            </div>
            <div class="buttones_accion">
              <button class="botoncomprar"><span class="andes-button__content">Comprar ahora</span></button>
              <button class="botoncomprar2"><span class="andes-button__content">Agregar al carrito</span></button>
            </div>
            <div class="sdfdsasdas">
              <p  color="color: rgba(0,0,0,.55);"class="link-infoasds"><a class="action-link"href="">Devoluciones gratis.</a> Tienes 30 dias desde que lo recibes.</p>
              <p class="link-infoasds"><a class="action-link"href="">Compra Protegida,</a> recibe el producto que esperabas o te devolvemos tu dinero.</p>
              <p class="link-infoasds"><a class="action-link"href="">Encom Puntos,</a> sumas 750 puntos.</p>
              <p class="link-infoasds">12 meses de garantia de fabrica.</p>

            </div>
            </div>
            </div>
            <?php
              $imagenes = array(
                "1" => array(
                  "https://http2.mlstatic.com/D_NQ_NP_606160-MLA53446532444_012023-O.webp",
                  "https://http2.mlstatic.com/D_Q_NP_674592-MLA53446487968_012023-R.webp",
                  "https://ejemplo.com/imagen1-3.jpg"
                ),
                "2" => array(
                  "https://http2.mlstatic.com/D_Q_NP_699538-MCO69510888045_052023-AB.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "3" => array(
                  "https://http2.mlstatic.com/D_Q_NP_742663-MCO54742828201_032023-AB.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                
                "4" => array(
                  "https://http2.mlstatic.com/D_NQ_NP_924538-MCO69817798690_062023-O.webp",
                  "https://http2.mlstatic.com/D_NQ_NP_924538-MCO69817798690_062023-O.webp",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "5" => array(
                  "https://http2.mlstatic.com/D_Q_NP_998455-MCO68962240439_042023-AB.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "6" => array(
                  "https://http2.mlstatic.com/D_NQ_NP_735630-MCO69822540672_062023-O.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "7" => array(
                  "https://http2.mlstatic.com/D_NQ_NP_845949-MLA47781634244_102021-O.webp",
                  "https://http2.mlstatic.com/D_NQ_NP_845949-MLA47781634244_102021-O.webp",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "8" => array(
                  "https://http2.mlstatic.com/D_NQ_NP_679726-MLA53452158591_012023-O.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "9" => array(
                  "https://http2.mlstatic.com/D_Q_NP_605126-MLM51559383638_092022-P.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "10" => array(
                  "https://http2.mlstatic.com/D_Q_NP_708665-MCO52169131424_102022-P.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
                "11" => array(
                  "https://http2.mlstatic.com/D_Q_NP_776429-MLA49982653825_052022-P.webp",
                  "https://ejemplo.com/imagen2-2.jpg",
                  "https://ejemplo.com/imagen2-3.jpg"
                ),
              
              "12" => array(
                "https://http2.mlstatic.com/D_Q_NP_617468-MLA50417982845_062022-P.webp",
                "https://ejemplo.com/imagen2-2.jpg",
                "https://ejemplo.com/imagen2-3.jpg"
              ),
              "13" => array(
                "https://http2.mlstatic.com/D_Q_NP_737237-MLA49771097528_042022-P.webp",
                "https://ejemplo.com/imagen2-2.jpg",
                "https://ejemplo.com/imagen2-3.jpg"
              ),
              "14" => array(
                "https://http2.mlstatic.com/D_Q_NP_968239-MLA49706417428_042022-P.webp",
                "https://ejemplo.com/imagen2-2.jpg",
                "https://ejemplo.com/imagen2-3.jpg"
              ),
                
                "15" => array(
                  "https://http2.mlstatic.com/D_Q_NP_865004-MLA48009568948_102021-P.webp",
                  "https://ejemplo.com/imagen15-2.jpg",
                  "https://ejemplo.com/imagen15-3.jpg"
                ),
                );
                
                
                $idProducto = isset($_GET["id"]) ? $_GET["id"] : "";
                
                
                if (array_key_exists($idProducto, $imagenes)) {
                  $urls = $imagenes[$idProducto];
                  
                  
                  $url = reset($urls); 
                  echo '<img src="' . $url . '" alt="Imagen" width="310" height="200" id="img_producto">';
                } else {
                  echo "No se encontraron imágenes para el producto actual";
                }
                ?>
        
                </figure>
                <div id="information22">
        
                <div id="informacion_producto">
          
                <h1 font-size="1rem"id="prosd-nombre" class="prosd-nombre"> <?php echo $nombre; ?></h1>
          
                <div class="rating">
                  <span class="star"><i class="fa-regular fa-star"></i></span>
                  <span class="star"><i class="fa-regular fa-star"></i></i></span>
                  <span class="star"><i class="fa-regular fa-star"></i></i></span>
                  <span class="star"><i class="fa-regular fa-star"></i></span>
                  <span class="star"><i class="fa-regular fa-star"></i></span>
                  </div>
                </div>
                  <a href="" id="buton_mv">MAS VENDIDO</a>
                  <h1 class="precio_prr">$ <?php echo number_format($precio, 0, ".", ".");?></h1>
                    <p color="black" class="descripcion_pr"><?php echo html_entity_decode($descripcion); ?></p>
        
                  </div>
                  <div class="separation"></div>
                  <br>
    </div>
    <br>
   
    <div id="asdadsa">
<div id="">
  <img id="samsung_banner" height="165px"src="https://http2.mlstatic.com/D_NQ_NP_772321-MLA54010590735_022023-OO.webp" alt="">
</div>
<div id="">
  <img id="samsung_banner2" height="165px"src="https://http2.mlstatic.com/D_NQ_NP_682439-MLA54010590740_022023-OO.webp" alt="">
</div>
</div>
<br>
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
  <small class="sdjk">Copyright ©2023 Elcom. Todos los derechos reservados.</small>
  <br>
  <small class="sdjk">Cucuta,Norte de Santander</small>

</div>
</footer>
  
</main>
</body>
</html>