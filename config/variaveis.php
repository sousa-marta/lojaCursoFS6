<?php 
session_start(); //precisa sempre quando for usar infos da sessão
    $nomeSistema = "Cursos Ai!";
    $usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : [];

    $nomeArquivo = __DIR__."/../produto.json"; //volta uma pasta pra encontrar o arquivo do .json. o php precisa do caminho certinho pra funcionar direito
    $produtos = json_decode(file_get_contents($nomeArquivo), true);
    
    // echo $nomeArquivo;

    /*  $produtos = [
        ["nome" =>"Curso Fullstack","preco"=>"R$ 1.200,00", "duracao"=>"5 meses", "img"=>"img/curso1.jpg"], 
        ["nome" =>"Curso Marketing","preco"=>"R$ 1.000,00", "duracao"=>"4 meses", "img"=>"img/curso2.jpg"],
    ]; */

    $categorias = ["Cursos", "Palestras", "Artigos","Outros"];
?>