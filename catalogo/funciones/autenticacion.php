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
            /*####  acá ya sabemos que se logueó bien  ###*/
            ###### RUTINA de autenticación
            
        }



    }

    function logout()
    {
    }

    function autenticar()
    {
    }
