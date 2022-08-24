<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TodosIpsModel;
use App\Models\FiltrarIpsModel;

class Tabela extends BaseController
{

    private $todosIpsModel;
    private $filtarIpsModel;

    public function __construct()
    {
        $this->todosIpsModel = new TodosIpsModel();
        $this->filtrarIpsModel = new FiltrarIpsModel();
    }

    public function exibir()
    {
        $ips = $this->todosIpsModel->findAll();

        echo view ('nav');
        echo view ('tabela',[
            'ips' => $ips
        ]);
    }

    public function cadastrar()
    {
        echo view ('nav');
        echo view('form');
    }

    public function filtrar()
    {
        $ips = $this->todosIpsModel->findAll();
        $filtros = $this->filtrarIpsModel->findAll();

        foreach ($ips as $ip){
            foreach ($filtros as $filtro)
            {
                if($ip['ip'] == $filtro['ip'])
                {
                    $id = $ip['id'];
                    unset($ips[$id]);
                } 
            } 
        }
        
        echo view ('nav');
        echo view ('tabela',[
            'ips' => $ips
        ]);
    }
}
