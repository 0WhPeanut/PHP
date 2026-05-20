<?php

class Retangulo{
//atributos


    public $base;
    public $altura;
   


//metodos

    function area(){
        echo "\nOlá mundo, sou " . $this->nome . ".\n";

    }

    function perimetro(){
        echo "Moro em " . $this->endereco  . ", cidade de " . $this->cidade . ".\n";
    }

    function falarAltura(){
        echo "Tenho " . $this->altura . " metros.\n";
    }


}


//programa principal

echo "Pessoa1: \n\n";

$retangulo1 = new Retangulo();
$retangulo1-> nome = readline("Digite seu nome: ");
$retangulo1-> endereco = readline("Digite seu endereco: ");
$retangulo1-> cidade = readline("Digite sua cidade: ");
$retangulo1-> UF = readline("Digite seu UF (estado): ");
$retangulo1-> altura = readline("Digite sua altura: ");

$retangulo1->falarOla();
$retangulo1->falarEndereco();
$retangulo1->falarAltura();