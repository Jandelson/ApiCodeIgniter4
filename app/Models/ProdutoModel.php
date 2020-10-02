<?php

namespace App\Models;

use App\Entities\Produto;
use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'prod_descricao';
    protected $primaryKey = 'id_prod_descricao';
    protected $returnType = Produto::class;

    protected $allowedFields = [
        'id_produto',
        'descricao'
    ];

    public function findProduto($id)
    {
        $query = $this->db->query("select * from {$this->table} where id_produto = " . $id);
        return $query->getResultArray();
    }
}
