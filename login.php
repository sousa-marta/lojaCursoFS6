<?php 
$usuario = ["email" => "email@email.com", "senha" => '$2y$10$qL5vZE5DyuaPpar7Rw92ueQnSI6n5PeOTCFM/ah7Ac4tMk4IdFeky'];
// tem que ser aspas simples

if($_POST){  //dá true se tiver conteúdo, se não, da false
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    //Validando email
    if($email == $usuario["email"]){  //se não existir, já nem testa a senha - evita processo desnecessário
        //validando senha
        if(password_verify($senha, $usuario["senha"])){  //if =true
            session_start();
            $_SESSION["usuario"] = ["nome" => "Vitor"];
            header("Location:index.php");
        }else{
            echo "Email ou senha inválidos";        
        }
    }else {
        echo "Email ou senha inválidos";
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php include_once "includes/header.php"; ?>
    <main class="d-flex justify-content-center align-item-center p-5">
        <form action="login.php" method="post" class="card p-2">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" required>
            </div>
            <div class="form-group text-right">
                <button class="btn btn-success" type="submit">Logar</button>
            </div>
        </form>
    </main>
    
</body>
</html>