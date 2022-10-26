<?php
    class usuario 
    {
        private $id;
        private $nome;
        private $email;
        //Definindo id = variavel
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = trim($i); 
        }


        //Definindo nome = variavel
        public function getNome(){
            return $this->nome;
        }

        public function setNome($n){
            //ucwords deixa as primeiras letras maiúsculas
            $this->nome = ucwords(trim($n));
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($e){
            //strtolower deixa tudo minúsculo
            $this->email = strtolower(trim($e));
        }

    }

    interface UsuarioDAO{
        public function create(usuario $u);
        public function findAll();
        public function findByID();
        public function update(usuario $u);
        public function delete($id);
    }
    
