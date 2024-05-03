<?php

namespace App\Route;

use App\Controller\ClientController;
use App\Model\Client;

class Router
{
    private $controller;

    public function __construct() 
    {
        $this->controller = new ClientController();
    }

    public function run(string $requestUri)
    {
        $requestUri = parse_url($requestUri, PHP_URL_PATH);
        
        switch ($requestUri) {
            case '/':
                $this->controller->menu();
                break;

            case '/cadastro':
                $this->controller->criar();
                break;

            case '/consulta':
                $this->controller->listar();
                break;

            case '/editar':
                $client = new Client();
                $client->setId($_GET['client']);
                $this->controller->editar($client);
                break;

            case '/salvar':
                $client = new Client($_POST['name'], $_POST['email'], $_POST['born']);
                $this->controller->salvar($client);
                break;

            case '/atualizar':
                $client = new Client($_POST['name'], $_POST['email'], $_POST['born']);
                $client->setId($_GET['client']);
                $this->controller->atualizar($client);
                break;

            case '/deletar':
                $client = new Client();
                $client->setId($_GET['client']);
                $this->controller->deletar($client);
                break;

            default:
                http_response_code(404);
                echo 'Erro 404';
        }
    }
}