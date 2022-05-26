<?php

include '../config.php';
require '../src/Artigo.php';
require '../src/Imagem.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $imagem = new Imagem($_FILES['imagem']);
    $novoNomeArquivo = $imagem->salvar();

    $artigo = new Artigo($mysql);
    $artigo->adicionar($_POST['titulo'], $_POST['previa'], $_POST['conteudo'], $_POST['genero'], $novoNomeArquivo);

    header('location: index.php');
    die();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Adicionar artigo</title>
</head>
<body>
      
    
    <div class="conteiner">
        <h1>Novo artigo</h1>
        <div class="artigo">
            <form action="adicionar-artigo.php" method="post" enctype="multipart/form-data">
                <label for="titulo">Titulo do artigo</label>
                <input type="text" id="titulo" name="titulo">

                <label for="previa">Prévia</label>
                <textarea name="previa" id="previa" cols="50" rows="7"></textarea>

                <label for="imagem">Imagem do artigo</label>
                <input type="file" name="imagem" id="imagem">

                <label for="genero">Genero do artigo</label>
                <select name="genero" id="genero">
                    <option value="BACK-END">BACK-END</option>
                    <option value="FRONT-END">FRONT-END</option>
                    <option value="MOBILE">MOBILE</option>
                    <option value="BANCO DE DADOS">BANCO DE DADOS</option>
                </select>

                <label for="conteudo">Conteúdo</label>
                <textarea name="conteudo" id="conteudo" cols="80" rows="40"></textarea>
                <br>
                <button class="botao">Adicionar</button>
                <a href="../admin/index.php" class="botao-voltar">Voltar</a>
            </form>
        </div>
    </div>
</body>
</html>