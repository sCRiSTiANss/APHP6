<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>
<body>
    <?php
    if(isset($_POST['username']) && isset($_POST['password'])) {

	//Código aqui
   
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if($user === 'admin' && $pass === 'admin123') {
            echo "Bem-vindo" . $user;
        } else {
            echo  "Login ou senha inválidos";
        }

    }


    }
    ?>
</body>
</html>
