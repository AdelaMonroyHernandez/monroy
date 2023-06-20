<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta </title>
</head>
<body>
    <?php

        $nombre=$_POST['name'];
        $correo=$_POST['email'];
        $telefono=$_POST['Telefono'];
        $genero=$_POST['genero'];
        $usuario=$_POST['user'];
        $contrasenia=$_POST['password'];
        $compassword=$_POST['compassword'];
        //se hace la comparacion
        if($compassword==$contrasenia){
            $respuesta="Correcto";
        }else{
            $respuesta="Incorrecto";
        }
    ?>

    <h1>Respuesta  </h1>
    <h2>Hola  : <?php echo($usuario) ?> </h2>
    <h2>Tu logueo fue : <?= $respuesta ?> </h2>
    
    <table>
        <tr>
            <td>Campos</td>
            <td>Registro</td>
        </tr>
        <tr>
            <td>Nombre completo</td>
            <td><?php echo($nombre); ?></td>
        </tr>
        <tr>
            <td>Correo electronico</td>
            <td><?php echo($correo); ?></td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td><?php echo($telefono); ?></td>
        </tr>
        <tr>
            <td>Genero</td>
            <td><?php echo($genero); ?></td>
        </tr>
        <tr>
            <td>Usuario</td>
            <td><?php echo($usuario); ?></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td><?php echo($contrasenia); ?></td>
        </tr>
    </table>
    <script src="../js/res.js"></script>

</body>
</html>