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
<body>
    <?php 
        include_once("includes/header.php");
        include_once("config/validacoes.php");

        $nomeUsuario = $_POST['nomeCompleto'];
        $cpf = $_POST['cpf'];

        validaNome($nomeUsuario);
        validaCPF($cpf);

        if ( count($erros) == 0 ) {
            echo "<h1> Olá, $nomeUsuario, a sua compra foi realizada com sucesso :D </h1>" ;
            echo '<a href="index.php"> Retorne para cursos </a>'; //aqui poderia 'abrir' html
        } else {
            foreach ($erros as $mensagemDeErro) {
                echo "<h3>$mensagemDeErro</h3>";
            }
        }


    ?>
</body>
</html>

