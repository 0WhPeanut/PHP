<?php

class Pessoa{
//atributos


    public $nome;
    public $endereco;
    public $cidade;
    public $UF;
    public $altura;


//metodos

    function falarOla(){
        echo "\nOlá mundo, sou " . $this->nome . ".\n";

    }

    function falarEndereco(){
        echo "Moro em " . $this->endereco  . ", cidade de " . $this->cidade . ".\n";
    }

    function falarAltura(){
        echo "Tenho " . $this->altura . " metros.\n";
    }


}


//programa principal

echo "Pessoa1: \n\n";

$pessoa1 = new Pessoa();
$pessoa1-> nome = readline("Digite seu nome: ");
$pessoa1-> endereco = readline("Digite seu endereco: ");
$pessoa1-> cidade = readline("Digite sua cidade: ");
$pessoa1-> UF = readline("Digite seu UF (estado): ");
$pessoa1-> altura = readline("Digite sua altura: ");

$pessoa1->falarOla();
$pessoa1->falarEndereco();
$pessoa1->falarAltura();
