<?php
    private $id;
    private $login;
    private $email;
    private $senha;
    private $logado;

//feito com caht gpt:
    //get id
    function getId() {
        return $this->id;
    }   
    //set id
    function setId($id) {
        $this->id = $id;
    }
    //get login
    function getLogin() {
        return $this->login;
    }
    //set login
    function setLogin($login) {
        $this->login = $login;
    }
    //get email
    function getEmail() {
        return $this->email;
    }
    //set email
    function setEmail($email) {
        $this->email = $email;
    }
    //get senha
    function getSenha() {
        return $this->senha;
    }
    //set senha
    function setSenha($senha) {
        $this->senha = $senha;
    }
    //get logado
    function getLogado() {
        return $this->logado;
    }
    //set logado
    function setLogado($logado) {
        $this->logado = $logado;
    }