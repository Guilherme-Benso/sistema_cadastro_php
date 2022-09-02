<?php
require_once "models/Usuario.php";

class UsuarioDaoMySQL implements UsuarioDAO{
    private $pdo;
    public function _construct(PDO $driver){
        $this->pdo = $driver;
    }


    public function create(usuario $u){

    }
    public function findAll(){
        $array = [];
        $sql = $this->pdo->query("SELECT * FROM clientes");
        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach ($data as $item) {
                $u = new Usuario();
                $u->setId($item["id"]);
                $u->setNome($item["nome"]);
                $u->setEmail($item["email"]);

                $array[] = $u;
            }
        }
        return $array;
    }
    public function findByID(){

    }
    public function update(usuario $u){

    }
    public function delete($id){

    }
}