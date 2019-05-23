<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Cacalcss/login.css">
    </head>
    
    <body bgcolor="#5358A4">;
         <?php 
        session_start();



        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                  window.location.href ='login.php';
                </script>";

        }
        $logado = $_SESSION['email'];
        ?>
    </body>
</html>