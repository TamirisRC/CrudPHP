<?php
namespace App\Controller;

use App\Model\Client;
use App\Repository\ClientRepository;
use PDO;

class ClientController
{
    private $repository;

    public function __construct() 
    {
        $this->repository = new ClientRepository();
    }

    public function menu(){
        $this->criar();
    }

    public function criar(){
        include 'View/cadastro.php';
    }

    public function listar(){
        $clients = $this->repository->listar();
        include 'View/listar.php';
    }

    public function editar(Client $client){
        $client = $this->repository->ler($client);
        include 'View/editar.php';
    }

    public function salvar(Client $client)
    {
        $result = $this->repository->salvar($client);
        
        return $this->listar();
    }


    public function atualizar(Client $client) 
    {
        $result = $this->repository->atualizar($client);

        return $this->listar();
    }


    public function deletar(Client $client) 
    {
        $result = $this->repository->deletar($client);

        return $this->listar();
    }
}