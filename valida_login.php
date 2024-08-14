<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
</head>


<body>

    <?php

    // iniciando a seção
    session_start();
    $_SESSION['X']='Seção oficialmente aberta';
    print_r($_SESSION['X']);
    echo '<hr>';

    $usuario_autenticator=false; 

       $usuarios_app=array(
            array(
                'email' => 'landgrafcarvalho@outlook.com',
                'senha' => 'zbzhn245'
            ),
            array(
                'email' => 'landgrafcarvalho@outlook.com',
                'senha' => 'zbzhn2456'
            )
        );

     foreach ($usuarios_app as $user) { 
          if ($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']) {
                $usuario_autenticator=true;
            }
        } 

       if($usuario_autenticator) {
            echo "Usuário Autenticado";
            $_SESSION['autenticado']='SIM'; 
            header('location: home.php');
        } else {
            $_SESSION['autenticado']='NÂO'; 
            header('location: index.php?login=erro');
        }



    ?>

</body>

</html>