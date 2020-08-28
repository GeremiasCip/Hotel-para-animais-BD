<?php

class Dono {
    //atributos da classe dono
    private $CPF;
    private $nome;
    private $telefone;
    private $email;
    private $data_nascimento;
    private $rua;
    private $numero;
    private $bairro;
    private $complemento;
    private $cidade;
    private $estado;
    private $cep;
    private $senha;

    //Construtor que recebe como parametro os valores dos atributos
    function __construct($CPF, $nome, $telefone, $email, $data_nascimento, $rua, $numero, $bairro, $complemento, $cidade, $estado, $cep, $senha) {
        $this->CPF = $CPF;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->data_nascimento = $data_nascimento;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->complemento = $complemento;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->senha = $senha;
    }

    function getCPF() {
        return $this->CPF;
    }
    function getnome() {
        return $this->nome;
    }
    function getTelefone() {
        return $this->telefone;
    }
    function getEmail() {
        return $this->email;
    }
    function getdata_nascimento() {
        return $this->data_nascimento;
    }
    function getRua() {
        return $this->rua;
    }
    function getNumero() {
        return $this->numero;
    }
    function getBairro() {
        return $this->bairro;
    }
    function getComplemento() {
        return $this->complemento;
    }
    function getCidade() {
        return $this->cidade;
    }
    function getEstado() {
        return $this->estado;
    }
    function getCep() {
        return $this->cep;
    }
    function getSenha() {
        return $this->senha;
    }
    
}
?>