<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Produto extends Entity
{
    protected $attributes = [
        'id_produto',
        'descricao'
    ];

    public function setProdutoIdProduto(string $produtoIdProduto)
    {
        $this->attributes['id_produto'] = strtoupper($produtoIdProduto);
        return $this;
    }

    public function setProdutoDescricao(string $ProdutoDescricao): self
    {
        $this->attributes['descricao'] = ucwords($ProdutoDescricao);
        return $this;
    }
}
