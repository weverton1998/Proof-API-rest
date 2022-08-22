<?php

namespace App\Models;

use CodeIgniter\Model;

class FiltrarIpsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'filtraIps';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        "ip"
    ];    
    
}
