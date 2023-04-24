<?php

    function login() : void
    {
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        $link = conectar();
        $sql = "SELECT  idUsuario, nombre, apellido, clave, idRol
                    FROM usuarios
                    WHERE email = '".$email."'";
        try {
            $resultado = mysqli_query($link, $sql);
            $cantidad = mysqli_num_rows( $resultado );
        }catch (Exception $e){
            echo $e->getMessage();
        }

        //si cantidad == 0 -> usuario mal
        //si cantidad == 1 -> usuario ok
        if( $cantidad == 0 ){
            //redirección a formLogin
            header('location:formLogin.php?error=1');
            //return;
        }
        else{
            //en este punto sabemos: usuario ok
            #verificar la contraseña
            $datosUsuario = mysqli_fetch_assoc($resultado);

            if( !password_verify( $clave, $datosUsuario['clave'] ) )
            {
                //redirección a formLogin
                header('location:formLogin.php?error=1');
                //return;
            }
            else{
            /*####  acá ya sabemos que se logueó bien  ###*/
            ###### RUTINA de autenticación
            $_SESSION['login'] = 1;
            #registramos otros datos de usuario
            $_SESSION['idUsuario'] = $datosUsuario['idUsuario'];
            $_SESSION['nombre'] = $datosUsuario['nombre'];
            $_SESSION['apellido'] = $datosUsuario['apellido'];
            $_SESSION['email'] = $email;
            $_SESSION['idRol'] = $datosUsuario['idRol'];

            //redireccionar a admin
            header('location:admin.php');
            }
        }
    }

    function logout() : void
    {
        #borramos variables de sesión
        session_unset();
        ## eliminamos la sesión
        session_destroy();

        //redirección a formulario de login
        header('refresh:3;url=formLogin.php');
    }

    function autenticar() : void
    {
        if( !isset( $_SESSION['login'] ) ){
            header('location:formLogin.php?error=2');
        }
    }

    function noEsAdmin() : void
    {
        if( $_SESSION['idRol'] != 4 ){
            //código para informar intento de entrada
            header('location:noAdmin.php');
        }
    }