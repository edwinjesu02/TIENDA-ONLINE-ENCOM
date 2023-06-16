<?php
 require "../database_producto/database.php";
 $message="";
 if(!empty($_POST["email"]) && !empty($_POST["password"])){
    $sql="INSERT INTO usuarios( email, password) VALUES (:email,:password) ";
    $stml = $conn -> prepare($sql);
    $stml ->bindParam(":email",$_POST["email"]);
    $password= password_hash($_POST["password"], PASSWORD_BCRYPT);
    $stml ->bindParam(":password",$password);
    
    if ($stml->execute() ){
        $message="Successfully create new user";

    } else{
        $message="Not  create new user";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <section id="logincont">
        <form action="register.php" method="post">
            <h1 id="title">Registrarse</h1>
            <div id="inforpage">
               

            </div>
            <?php 
            if (!empty($message) ):?>
            <p id="login_message"><?=$message ?></p>
            <?php endif;?>
            <h5 id="info">Usuario</h5>
            <input type="text" class="input" name="email" placeholder="Usuario">
            <h5 id="info">Contraseña</h5>
            <input type="text"class="input" name="password" placeholder="Ingrese Contraseña">
                <br>
                <h5 id="info">Confirme su contraseña</h5>
                <input type="text"class="input"name="confirm_password" placeholder="Repita Contraseña">
                <br>
            
            <input type="submit" value="INICIAR" id="input">
            <h3 id="incio"><a class="aasdd" href="index(1).php">Ir al inicio</a></h3>
        </form>
    </section>
    
</body>
</html>