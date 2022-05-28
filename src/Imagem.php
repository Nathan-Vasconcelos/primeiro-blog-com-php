<?php

class Imagem
{
    //imagem
    private $arquivo;

    public function __construct($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function salvar(): string
    {
        //salvar
        $nomeArquivo = $this->arquivo['name'];
        $novoNomeArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
        
        //verificar extensao
        if ($extensao !== 'jpg' and $extensao !== 'png') {
            return '';
        }

        $pasta = "../imagens/";
        move_uploaded_file($this->arquivo["tmp_name"], $pasta . $novoNomeArquivo . "." . $extensao);
        $localArquivo = $novoNomeArquivo . "." . $extensao;
        return $localArquivo;
    }
     public function deletar($caminhoImagem): void
     {
         //deletar a imagem
         unlink($caminhoImagem);
     }

}
