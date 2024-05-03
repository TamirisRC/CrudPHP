<?php
namespace App\Model;

class Client
{
    private int $id;
    private string $name;
    private string $email;
    private string $born;

    public function __construct($name = '', $email = '', $born = '') 
    {
        $this->name = $name;
        $this->email = $email;
        $this->born = $born;
    }

    public function bornCodigo(){
        $partes = explode('/', $this->born);
    
        $data_formatada = $partes[2] . '-' . $partes[1] . '-' . $partes[0];
    
        return $data_formatada;
    }

    public function dataFormatada(){
        $partes = explode('-', $this->born);

        $data_formatada = $partes[2] . '/' . $partes[1] . '/' . $partes[0];

        return $data_formatada;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }


    public function getName(): String
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }


    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }


    public function getBorn(): string
    {
        return $this->born;
    }

    public function setBorn(string $born)
    {
        $this->born = $born;
    }
}