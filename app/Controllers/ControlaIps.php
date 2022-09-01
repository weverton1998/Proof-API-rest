<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\TodosIpsModel;
use App\Models\FiltrarIpsModel;

class ControlaIps extends ResourceController
{
    private $todosIpsModel;
    private $filtarIpsModel;

    public function __construct()
    {
        $this->todosIpsModel = new TodosIpsModel();
        $this->filtrarIpsModel = new FiltrarIpsModel();
    }

    //get para retornar todos os ips
    public function get()
    {
        $retorno = [];

        try
        {
            //os gets podem lancar uma execao
            //essa chamada chama os dois gets em sequencia
            ControlaIps::getIp2();
 
            $retorno =  $this->todosIpsModel->findAll();
        }
        catch (Exception $e)
        {
            $retorno = [
                'titulo' => 'erro',
                'msg' => 'os ips so podem ser capturados a cada 30 minutos',
                'erro' => [
                    'exception' => $e->getMessage()
                ],
                'rotaAlternativa' => 'para acessar os dados da ultima capitura acessse: tabela/exibir'
            ]; 
        }

        return $this->response->setJson($retorno);
    }

    //pega ips do site torlist
    private function getIp1()
    {
        //pega os ips q a pagina retorna
        //essa requisicao pode lencar uma execao, pois a pagina so permite retornar os ips a cada 30 minutos
        $conteudo = file_get_contents('https://www.dan.me.uk/torlist/'); 

        //limpa as tabelas do bd caso nao tenha lancado a execao
        $this->todosIpsModel->truncate();

        //converte os dados que a pagina retorno em formato de String para um array
        $ips = explode("\n", $conteudo);
            
        ControlaIps::salvarIps($ips);

        ControlaIps::getIp2();
    }

    //pega ips do site onionoo
    private function getIp2()
    {
        //pega os dados que a pagina retorna
        $conteudo = file_get_contents('https://onionoo.torproject.org/summary?limit=5000');
        
        $arr = ControlaIps::formataArray($conteudo);

        ControlaIps::salvarIps($arr);
    }

    private function formataArray($conteudo){
        //pega dados que veio em formato json e transforma em array
        $infor = json_decode($conteudo, true);
        $dados = $infor["relays"];
        $arr = [];
        
        //pega o array criado e filtra pegando o valro referente a chave 'a' que e o ip
        foreach ($dados as $a) { 
            $a = $a["a"];
            
            array_push($arr, $a[0]); 
        }

        return $arr;
    }

    //percorre o array de ips salvando no banco de dados
    private function salvarIps($listaIps){
        foreach ($listaIps as $a) {
            $this->todosIpsModel->save([
                'ip' => $a
            ]);
        } 
    }

    //inserre um novo ip
    public function post()
    {
        $retorno = [];

        //pega ip inserido na requisicao
        $novoIp = $this->request->getpost();
        
        if($this->filtrarIpsModel-> save([
            'ip' => $novoIp
        ]))
        {
            $retorno = [
                'titulo' => 'secesso',
                'msg' => 'Ip adicionado com sucesso'
            ];
        }
        else
        {
            $retorno = [
                'titulo' => 'erro',
                'msg' => 'erro ao salvar o ip',
                'erro' => $this->filtrarIpsModel->errors()
            ];
        }

        return $this->response->setJson($retorno);
    }
    
    //filtra os ips de acordo com os ips inseridos
    public function filtrar()
    {
        $ips = $this->todosIpsModel->findAll();
        $filtros = $this->filtrarIpsModel->findAll();
        $resultado = [];

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
   
        return $this->response->setJson($ips);
    }
}
