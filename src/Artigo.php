<?php

class artigo
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirTodos(): array
    {
        $resultado = $this->mysql->query('SELECT id, titulo, previa, conteudo, genero FROM artigos');
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function exibirUmArtigo(string $id)
    {
        //mostar um artigo
        $resultado = $this->mysql->prepare("SELECT id, titulo, previa, conteudo, genero, imagem FROM artigos WHERE id = ?");
        $resultado->bind_param('s', $id);
        $resultado->execute();
        $artigo = $resultado->get_result()->fetch_assoc();
        return $artigo;
    }

    public function adicionar(string $titulo, string $previa, string $conteudo, string $genero, string $imagem): void
    {
        //adicionar artigo
        $adicionar = $this->mysql->prepare('INSERT INTO artigos (titulo, previa, conteudo, genero, imagem) VALUES(?,?,?,?,?);');
        $adicionar->bind_param('sssss', $titulo, $previa, $conteudo, $genero, $imagem);
        $adicionar->execute();
    }

    public function editar(string $id, string $titulo, string $previa, string $conteudo, string $genero, string $imagem): void
    {
        //editar
        $editar = $this->mysql->prepare('UPDATE artigos SET titulo = ?, previa = ?, conteudo = ?, genero = ?, imagem = ? WHERE id = ?;');
        $editar->bind_param('ssssss', $titulo, $previa, $conteudo, $genero, $imagem, $id);
        $editar->execute();
    }

    public function excluir(string $id): void
    {
        //excluir
        $excluir = $this->mysql->prepare('DELETE FROM artigos WHERE id = ?;');
        $excluir->bind_param('s', $id);
        $excluir->execute();
    }

    public function filtrarGenero(string $genero): array
    {
        //EM CONSTRUÇÃO!
        //filtrando pelo genero
        $resultado = $this->mysql->prepare("SELECT id, titulo, previa, conteudo, genero, imagem FROM artigos WHERE genero = ?;");
        $resultado->bind_param('s', $genero);
        $resultado->execute();
        $artigo = $resultado->get_result()->fetch_all(MYSQLI_ASSOC);//fetch_assoc();
        return $artigo;
    }

    public function exibirGeneros(): array
    {
        //Mostrar os generos dos artigos
        $resultado = $this->mysql->query('SELECT genero FROM artigos GROUP BY genero;');
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}
