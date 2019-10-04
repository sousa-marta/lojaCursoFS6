<?php
    $nomeSistema = "Cursos Ai!";
    $usuario = ["nome" => "Marta"];
    $categorias = ["Cursos", "Palestras", "Artigos","Outros"];
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
<header>
    <div class="navbar border-bottom border-white bg-dark">
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
    </div>

    <nav class="d-flex justify-content-center bg-secondary">
        <ul class="nav">
            <?php if(isset($usuario) && $usuario != []) { ?>
                <?php foreach($categorias as $categoria){ ?> 
                    <li class="nav-item mx-2">
                        <a href="#" class="nav-link text-white"><?php echo $categoria ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </nav>
</header>

<main>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1>Carrinho de Compras</h1>
            </div>
            <div class="col-12">
                <div class="row card">
                    <div class="col-12">
                        <h3>Você está comprando o <?php echo $_GET['nomeProduto']; ?></h3>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form class="d-flex flex-column p-3" method="post" action="sucesso.php">
                            <input type="text" name="nomeCompleto" placeholder="Digite seu nome">
                            <input type="text" name="cpf" placeholder="Digite seu cpf">
                            <input type="number" name="cartao" placeholder="Digite o número do cartão">
                            <input type="date" name="validadeCartao" placeholder="Digite a data de validade">
                            <input type="password" name="codigoCartao" placeholder="Digite o CCV">
                            <button type="submit" class="btn btn-success">Finalizar Compra</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
   
    

</main>
</html>