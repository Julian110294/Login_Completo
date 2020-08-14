<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Login Completo</title>


    <link rel="stylesheet" href="estilo.css">


    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">


</head>


<body>


    <main>


        <!-- Cajas de Texto Traseras -->

        <div class="contenedor__todo">





            <div class="caja__trasera">

                <div class="caja__trasera-login">

                    <h3>¿Ya Tienes una Cuenta?</h3>
                    <p>Inicia Sesion para Ingresar</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>

                </div>


                <div class="caja__trasera-register">

                    <h3>¿Aun No Tienes una Cuenta?</h3>
                    <p>Registrate para Iniciar Sesion</p>
                    <button id="btn__registrarse">Registrarse</button>

                </div>

        </div>



        <!-- Formularios -->


        <div class="contenedor__login-register">

            <form action="" class="formulario__login">

                <h2>Iniciar Sesion</h2>
                <input type="text" placeholder="Email">
                <input type="password" placeholder="Contraseña">
                <button>Ingresar</button>

            </form>



            <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre" name = "nombre">
                <input type="text" placeholder="Email" name = "email">
                <input type="text" placeholder="Nombre de Usuario" name = "usuario">
                <input type="password" placeholder="Contraseña" name = "password">
                <button>Registrarse</button>
                
            </form>

        </div>




        <!-- ================================================================= -->

        </div>


    </main>





    <script src="app.js"></script>

</body>
</html>