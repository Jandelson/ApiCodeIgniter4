<?php

namespace App\Models;

use CodeIgniter\Model;

class AgenteModel extends Model
{
    protected $table = 'agente';
    
    protected $allowFields = [
        'id_agente',
        'nome'
    ];

    public function rest()
    {
        $query = $this->db->query('select id_agente,nome from ' . $this->table . ' where nome <> ""');
        return json_encode($query->getResultArray(), true);
    }
}
