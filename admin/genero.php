<?php

include '../config.php';
require '../src/Artigo.php';

$artigos = new Artigo($mysql);
$art = $artigos->filtrarGenero($_GET['genero']);
$generos = $artigos->exibirGeneros();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Adm/filtrar por genero</title>
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
        <h1>Administração</h1>
        <?php foreach ($art as $artigo) : ?>
        <div class="artigo">
            <h2><?php echo $artigo['titulo']; ?></h2>
            <h3>
                <?php echo $artigo['previa']; ?>
            </h3>
            <br>
            <a href="editar.php?id=<?php echo $artigo['id'] ?>" class="botao">Editar</a>
            <a href="excluir.php?id=<?php echo $artigo['id'] ?>" class="botao-excluir">Excluir</a>
        </div>
        <?php endforeach ?>
    </div>
</body>
</html>