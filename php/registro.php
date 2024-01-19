<?php
    include 'conexion.php';
    $nombre=$_POST['Nombre'];
    $numero_contacto=$_POST['Numero_Contacto'];
    $email=$_POST['Email'];
    $asunto=$_POST['Asunto'];
    $comentarios=$_POST['Comentarios'];

    $consulta="INSERT into usuario(nombre,numero_contacto,email,asunto,mensaje) values('$nombre','$numero_contacto','$email','$asunto','$comentarios')";
    $resultado=mysqli_query($conexion, $consulta);

    if($resultado){
        echo "Registro Exitoso";
    }else{
        echo "No se Pudo Registar";
    }
?>