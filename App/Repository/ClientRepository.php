<?php
namespace App\Repository;

use App\Database\Database;
use App\Model\Client;
use PDO;

class ClientRepository 
{
    private $conn;

    public function __construct() 
    {
        $this->conn = Database::getInstance();
    }

    public function salvar(Client $client)
    {
        $query = "CALL store(:name, :email, :born)";

        $stmt = $this->conn->prepare($query);

        $name = $client->getName();
        $email = $client->getEmail();
        $born = $client->getBorn();

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":born", $born);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }


    public function listar() 
    {
        $query = "CALL list()";
        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {

            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $clients = array();
            $i = 0;

            foreach ($lista as $l) {
                $client = new Client;
                $client->setId($l['id']);
                $client->setName($l['name']);
                $client->setEmail($l['email']);
                $client->setBorn($l['born']);
                $clients[$i] = $client;
                $i++;
            }

            return $clients;
        }
        
        return false;
    }


    public function ler(Client $client) {
        $id = $client->getId();

        $query = "CALL readCli(:id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($result){
            $client = new Client();
            $client->setId($result['id']);
            $client->setName($result['name']);
            $client->setEmail($result['email']);
            $client->setBorn($result['born']);

            return $client;
        }
    }
        
        return false;
    }


    public function atualizar(Client $client) 
    {
        $query = "CALL updateCli(:id, :name, :email, :born)";

        $stmt = $this->conn->prepare($query);

        $id = $client->getId();
        $name = $client->getName();
        $email = $client->getEmail();
        $born = $client->getBorn();

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":born", $born);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }


    public function deletar(Client $client) 
    {
        $id = $client->getId();
        
        $query = "CALL deleteClient(:id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}