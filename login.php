<?php
        session_start();

        $connect = mysqli_connect('localhost', 'fneves', 'letmein','lagartixa') or die (mysqli_error($connect));

        mysqli_set_charset($connect,'utf8');
        mysqli_select_db($connect,"lagartixa") or die(mysqli_error($connect));
        mysqli_query($connect,"SET NAMES 'utf8'");
        mysqli_query($connect,'SET character_set_connection=utf8');
        mysqli_query($connect,'SET character_set_client=utf8');
        mysqli_query($connect,'SET character_set_results=utf8');


        //Para ficar com a hora correta (quer seja horário de inverno ou verão).
        date_default_timezone_set('Europe/Lisbon');

        $username = $_POST['username'];
        $password = $_POST['password'];

        $login = "SELECT * FROM utilizadores WHERE username='$username' AND password='$password'";
        $result_login = mysqli_query($connect, $login);

        if (mysqli_num_rows($result_login) > 0) {

                $userInfo = mysqli_fetch_array($result_login);

              

                $_SESSION['nome']=$userInfo['nome'];
                $_SESSION['id']=$userInfo['id'];
                $_SESSION['layers']=$userInfo['layers'];

                header("location: http://www.google.com");   //endereço ou pagina que vem depois de um login correto

        } else {
                header("location: index.php?erro=1");    
        }
?>
