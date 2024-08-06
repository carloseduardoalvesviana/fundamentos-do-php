<?php

interface Database
{
    public function insert(array $data): void;
    public function delete(int $id): void;
    public function update(int $id, array $data): void;
    public function find(int $id): void;
}

class Mysql implements Database
{
    public function insert(array $data): void
    {
        echo json_encode($data) . "\n";
        echo "Dados Inseridos Com Sucesso! \n";
    }

    public function delete(int $id): void
    {
        echo $id . " \n";
        echo "Objeto Deletado Com Sucesso! \n";
    }

    public function update(int $id, array $data): void
    {
        echo $id . "\n";
        echo json_encode($data) . "\n";
        echo "Objeto Atualizado Com Sucesso \n";
    }

    public function find(int $id): void
    {
        echo $id . " \n";
        echo "Objeto Encontrado Com Sucesso! \n";
    }
}

$mysql = new Mysql();
$mysql->insert(["nome" => "carlos"]);
$mysql->delete(4);
