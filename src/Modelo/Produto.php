<?php

class Produto
{

    private ?int $id;

    private string $tipo;

    private string $nome;

    private string $descricao;

    private string $imagem;

    private float $preco;

    // public function __construct($id = null, $tipo, $nome, $descricao, $imagem = "logo-serenatto.png", $preco)
    public function __construct(
        string $tipo,
        string $nome,
        string $descricao,
        float $preco,
        string $imagem = "logo-serenatto.png",
        ?int $id = null,
    ) {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
        $this->preco = $preco;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getPrecoFormatado(): string
    {
        return "R$ " . number_format($this->getPreco(), 2);
    }

    public function getImagemDiretorio(): string
    {
        return "img/" . $this->getImagem();
    }
}
