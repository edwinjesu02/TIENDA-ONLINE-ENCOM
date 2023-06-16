<?php
session_start();
 require "../database_producto/database.php";
 if (!empty($_POST['email']) && !empty($_POST["password"])) {
    $records = $conn->prepare("SELECT id , email, password, rol FROM usuarios WHERE email = :email");
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);



    $message = '';

    $_SESSION['user_id'] = $results['id'];
    $_SESSION['rol'] = $results['rol'];

    if (count($results) > 0 && password_verify($_POST["password"], $results["password"])) {      
      
      if (intval($_SESSION['rol']) == 2)
        header("Location: admingpage.php");
      else      
        header("Location: index.php");
    } 
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">

    <link rel="stylesheet" href="../css/login.css">
</head>
<body>


<?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
<?php endif; ?>

    <section id="logincont">
        <form action="login.php" method="post">
            <h1 id="title">Login</h1>
            <img src="../banner_img/logo.png"  id="logo_header"alt="" height="40px" widht="200px">
            <h3>Usuario</h3>
            <input type="text"class="input" name="email" placeholder="Usuario">
            <h3>Contraseña</h3>
            <input type="text" class="input" name="password" placeholder="Ingrese Contraseña">
                <br>
                <br>
            <input type="submit" value="INICIAR" id="input">
            <h3 id="incio"><a  class="aasdd"href="index(1).php">Ir al inicio</a></h3>
        </form>
    </section>
    
</body>
</html>