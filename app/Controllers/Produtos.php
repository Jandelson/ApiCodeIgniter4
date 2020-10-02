<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Entities\Produto;

class Produtos extends ResourceController
{
    protected $modelName = 'App\Models\ProdutoModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $dados = $this->model->findProduto($id);
        if (!$dados) {
            return $this->failNotFound(
                sprintf('Produto id %d não encontrado!', $id)
            );
        }

        return $this->respond($dados);
    }

    public function create()
    {
        $dados = $this->request->getPost();
        if (!$this->model->save($dados)) {
            return $this->fail($this->model->errors());
        }

        return $this->respondCreated($dados, 'Produto Cadastrado com sucesso!');
    }

    public function update($id = null)
    {
        $dados = $this->request->getRawInput();
        if (!$this->model->save($dados)) {
            return $this->fail($this->model->errors());
        }

        return $this->respond($produto, 200, 'Produto Atualizado!');
    }
}
