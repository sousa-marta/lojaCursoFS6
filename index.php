<?php
    $nomeSistema = "Cursos Ai!"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<!-- <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Cursos<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Login</a>
            <a class="nav-item nav-link" href="#">Cadastrar</a>
        </div>
    </div>
    </nav>   
</header> -->

<header class="d-flex justify-content-between align-items-center p-3">
    <h1 id="logo"><?php echo $nomeSistema;?></h1>
    <nav>
        <ul class="nav">
            <li class="nav-item">Cursos</li>
            <li class="nav-item">Login</li>
            <li class="nav-item">Cadastrar</li>
        </ul>
    </nav>
</header>

<body>



    // <?php
    //     $nome = "Marta";
    //     $idade = 30;

    //     //array numérico
    //     $usuario = ["Marta","Sousa",30, ["trilha","pintura","netflix"]];

    //     //array associativo
    //     $usuarioDois = ["nome"=>"marta","sobrenome"=>"Sousa","idade"=>30];

    //     echo $usuario[1];
    //     echo $usuarioDois["sobrenome"];

    //     echo "<br>";

    //     var_dump($usuario);

    //     echo $usuario[3][0];

    //     echo "<br>";
    //     //adicionando informações (fora da array)
    //     $usuario[]="guitarra";
    //     var_dump($usuario);
        
    //     //adicionando informações (dentro da array)
    //     $usuario[3][]="passear";
    //     echo "<br>";
    //     var_dump($usuario);

    //     echo "<br>";
    //     echo "<h1>".$usuario[0]." ".$usuario[1]."<br>"."</h1>";
    // ?>
</body>
</html>