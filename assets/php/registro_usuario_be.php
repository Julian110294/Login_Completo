

<?php

//Solicitar la Conexion

include 'conexion_be.php';


//Variables del Index.php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];


//Metodo con $query:


//Agregar un Registro a la Db

$query = "INSERT INTO usuarios(nombre, email, usuario, password)
Values('$nombre', '$email', '$usuario', '$password')";


//Verificamos que el Correo no se Repita en Nuestra Db


$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' ");

if(mysqli_num_rows($verificar_correo) > 0) //Verifica en la Db que no Exista una Fila con el Mismo Dato
{

    echo '<script> alert("Este Correo ya esta Registrado, Intenta con Otro"); window.location = "../index.php"; </script>';
    exit();

}


//Verificamos que el Nombre de Usuario no se Repita en Nuestra Db


$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0) //Verifica en la Db que no Exista una Fila con el Mismo Dato
{

    echo '<script> alert("Este Nombre de Usuario ya esta Registrado, Intenta con Otro"); window.location = "../index.php"; </script>';
    exit();

}




$ejecutar = mysqli_query($conexion, $query); //Ejecutamos la Conexion y la Query

if($ejecutar)
{
    echo '<script> alert("Registrado Exitosamente"); window.location = "../index.php"; </script>';
}
else
{
    echo '<script> alert("Error al Registrar, Intentalo Nuevamente"); window.location = "../index.php"; </script>';
}

mysqli_close($conexion);


?>