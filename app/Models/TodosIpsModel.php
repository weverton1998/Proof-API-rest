<?php

namespace App\Models;

use CodeIgniter\Model;

class TodosIpsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'todosIps';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        "ip"
    ];    
}
