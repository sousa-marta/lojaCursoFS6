<?php
    $nomeSistema = "Cursos Ai!";
    $usuario = ["nome" => "Marta"];

    $nomeArquivo = "produto.json";
    $produtos = json_decode(file_get_contents($nomeArquivo), true);

    

    /*  $produtos = [
        ["nome" =>"Curso Fullstack","preco"=>"R$ 1.200,00", "duracao"=>"5 meses", "img"=>"img/curso1.jpg"], 
        ["nome" =>"Curso Marketing","preco"=>"R$ 1.000,00", "duracao"=>"4 meses", "img"=>"img/curso2.jpg"],
    ]; */




    $categorias = ["Cursos", "Palestras", "Artigos","Outros"];
?>