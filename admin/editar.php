<?php

include '../config.php';
require '../src/Artigo.php';
require '../src/Imagem.php';

$artigos = new Artigo($mysql);
$art = $artigos->exibirUmArtigo($_GET['id']);
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //post
    $imagem = new Imagem($_FILES['imagem']);
    $novoNomeArquivo = $imagem->salvar();

    $artigo = new Artigo($mysql);
    $artigo->editar($id, $_POST['titulo'], $_POST['previa'], $_POST['conteudo'], $_POST['genero'], $novoNomeArquivo);

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
    <title>Editar</title>
</head>
<body>
      
    
    <div class="conteiner">
        <h1><?php echo $art['titulo']; ?></h1>
        <div class="artigo">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="titulo">Titulo do artigo</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $art['titulo']; ?>">

                <label for="previa">Prévia</label>
                <textarea name="previa" id="previa" cols="50" rows="7"><?php echo $art['previa']; ?></textarea>

                <p>
                <img src="../imagens/<?php echo $art['imagem']; ?>" alt="magem-do-artigo" height="350px" width="650px">
                </p>

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
                <textarea name="conteudo" id="conteudo" cols="80" rows="40"> <?php echo $art['conteudo']; ?></textarea>
                <br>
                <button class="botao">Editar</button>
                <a href="../admin/index.php" class="botao-voltar">Voltar</a>
            </form>
        </div>
    </div>
</body>
</html>