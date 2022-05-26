<?php

include 'config.php';
require 'src/Artigo.php';

$artigos = new Artigo($mysql);
$art = $artigos->exibirUmArtigo($_GET['id']);
$generos = $artigos->exibirGeneros();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Artigo</title>
</head>
<body>
      
    <nav>
        <ul>
            <a href="index.php" class="item-menu"><li>HOME</li></a>
            <?php foreach ($generos as $genero) : ?>
                <a href="genero.php?genero=<?php echo $genero['genero']; ?>" class="item-menu"><li><?php echo $genero['genero']; ?></li></a>
            <?php endforeach ?>
        </ul>
    </nav>
    <div class="conteiner">
        <h1><?php echo $art['titulo']; ?></h1>
        <div class="artigo">
            <h3><?php echo $art['previa']; ?></h3>
            <?php if ($art['imagem']  !== NULL) : ?>
                <br>
                <img src="imagens/<?php echo $art['imagem']; ?>" alt="magem-do-artigo" height="350px" width="650px">
            <?php endif ?>
                <p> 
                    <?php echo nl2br($art['conteudo']); ?>
                </p>
        </div>
    </div>
</body>
</html>