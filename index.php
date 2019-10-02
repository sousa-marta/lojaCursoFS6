<?php
    $nomeSistema = "Cursos Ai!";
    $usuario = ["nome" => "Marta"];

    $produtos = [
        ["nome" =>"Curso Fullstack","preco"=>"R$ 1.200,00", "duracao"=>"5 meses"], 
        ["nome" =>"Curso Marketing","preco"=>"R$ 1.000,00", "duracao"=>"4 meses"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<header class="navbar">
    <h1 id="logo"><?php echo $nomeSistema;?></h1>
    <nav>
        <ul class="nav">
            <?php if(isset($usuario) && $usuario != []) { ?>
                <li class="nav-item">
                    <a href="#" class="nav-link">Cursos</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Olá, <?php echo $usuario['nome']; ?> </a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a href="#" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Cadastrar</a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</header>

<main>
    <section class="container-fluid">
        <div class="row justify-content-center">

        <?php if(isset($produtos) && $produtos != []) { ?>
            <?php foreach($produtos as $produto){ ?>
                <div class="card col-12 col-lg-3 text-center m-4">
                    <h2 class="card-title"><?php echo $produto['nome']; ?></h2>
                    <img src="img/curso1.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-text"><?php echo $produto['preco']; ?></h5>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <h2>Não tem produtos cadastrados nessa sessão :(</h2>
        <?php } ?>
        </div>
    </section>




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
    

</main>
</html>