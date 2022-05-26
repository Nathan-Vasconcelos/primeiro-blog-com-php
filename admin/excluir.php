<?php

include '../config.php';
require '../src/Artigo.php';
require '../src/Imagem.php';

$artigos = new Artigo($mysql);
$art = $artigos->exibirUmArtigo($_GET['id']);
$generos = $artigos->exibirGeneros();

$caminhoImagem = '../imagens/' . $art['imagem'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->excluir($_POST['id']);

    $imagem = new Imagem($_FILES['imagem']);
    $imagem->deletar($caminhoImagem);

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
    <title>Excluir artigo</title>
</head>
<body>
      
    <nav>
        <ul>
            <a href="index.php" class="item-menu"><li>HOME</li></a>
            <a href="adicionar-artigo.php" class="item-menu"><li>ADICIONAR ARTIGO</li></a>
            <?php foreach ($generos as $genero) : ?>
                <a href="genero.php?genero=<?php echo $genero['genero']; ?>" class="item-menu"><li><?php echo $genero['genero']; ?></li></a>
            <?php endforeach ?>
        </ul>
    </nav>
    <div class="conteiner">
        <div class="artigo">
            <h2>Deseja excluir o Artigo <?php echo $art['titulo']; ?>?</h2>
            <br>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <a href="../admin/index.php" class="botao-voltar">Voltar</a>
                <button class="botao-excluir">Excluir</button>
            </form>
        </div>
    </div>
</body>
</html>