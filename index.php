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



    <?php
/*      $nome = "Marta";
        $idade = 30;

        //array numérico
        $usuario = ["Marta","Sousa",30, ["trilha","pintura","netflix"]];

        //array associativo
        $usuarioDois = ["nome"=>"marta","sobrenome"=>"Sousa","idade"=>30];

        echo $usuario[1];
        echo $usuarioDois["sobrenome"];

        echo "<br>";

        var_dump($usuario);

        echo $usuario[3][0];

        echo "<br>";
        //adicionando informações (fora da array)
        $usuario[]="guitarra";
        var_dump($usuario);
        
        //adicionando informações (dentro da array)
        $usuario[3][]="passear";
        echo "<br>";
        var_dump($usuario);

        echo "<br>";
        echo "<h1>".$usuario[0]." ".$usuario[1]."<br>"."</h1>"; */
    ?>
    
</body>
</html>