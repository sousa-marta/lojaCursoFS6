<?php 
    function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
        $nomeArquivo = "produto.json";

        if(file_exists($nomeArquivo)){
            //abrindo e pegando informações do arquivo que está em json, precisamos converter
            $arquivo = file_get_contents($nomeArquivo);
            $produtos = json_decode($arquivo, true);//se não colocar true ele converte em objeto (padrão);
            var_dump($produtos);
            //adicionando um novo produto na rray que esava dentro do produto:
            $produtos[] = ["nome" => $nomeProduto, "desc" => $descProduto, "img" => $imgProduto, "preco" => $precoProduto];

            //transformando array em json:
            $json = json_encode($produtos);
            //salvando o json dentro de um arquivo. se arquivo não existir, cria:
            $certo = file_put_contents($nomeArquivo,$json);

            if($certo){
                return "Deu certo :D";
            }else {
                return "Deu erro :(";
            }
    

        } else {
            $produtos = [];
            $produtos[] = ["nome" => $nomeProduto, "desc" => $descProduto, "img" => $imgProduto, "preco" => $precoProduto];
            //ou poderia usar array_push (mas é mais custoso para rodar)
            /* ou
            $produtos = [
                ["nome" => $nomeProduto, "preco" => $precoProduto, "desc" => $descProduto, "img" => $imgProduto];
            ]; */
            
            //transformando array em json:
            $json = json_encode($produtos);
            //salvando o json dentro de um arquivo. se arquivo não existir, cria:
            $certo = file_put_contents($nomeArquivo,$json);

            if($certo){
                return "Deu certo :D";
            }else {
                return "Deu erro :(";
            }

            // var_dump($json);
        }
    }

    if($_POST){
        //salvando arquivo:
        $nomeImg = $_FILES['imgProduto']['name']; //imgProduto é o name que deu lá no form. name é originário do $_Files
        $localTmp = $_FILES['imgProduto']['tmp_name'];
        $dataAtual = date("d-m-y");
        $caminhoSalvo = 'img/'.$dataAtual.$nomeImg;    //salva com o nome original do arquivo. Para mudar o nome ."nomeDiferente.png" (pegar a extensão do arquivo, tem que ser a mesma)

        $deuCerto = move_uploaded_file($localTmp, $caminhoSalvo);

        echo cadastrarProduto($_POST['nomeProduto'],$_POST['descProduto'],$caminhoSalvo,$_POST['precoProduto']);
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<?php include_once("header.php"); ?>
<main class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastro de Produto</h1>
        </div>
        <div class="col-12">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                   <input type="text" class ="form-control" name="nomeProduto" placeholder="Nome do Produto" id="">
                </div>
                <div class="form-group">
                    <input type="text" class ="form-control" name="descProduto" placeholder="Descrição do Produto" id="">
                </div>
                <div class="form-group">
                    <input type="file" class ="form-control" name="imgProduto" placeholder="Imagem do Produto" id="">
                </div>
                <div class="form-group">
                    <input type="number" class ="form-control" name="precoProduto" placeholder="Preço do Produto" id="">
                </div>
                <button type="submit" class="btn btn-success">Cadastrar Produto</button>
            </form>
        </div>
    </div>
</main>

</body>
</html>
