<?php

class Calculadora{


    private $numA;
    private $numB;

    public function soma(){

    $soma = $this->numA + $this->numB;
    return $soma;

    }

    public function sub(){

    $sub = $this->numA - $this->numB;
    return $sub;

    }

    public function mult(){

    $mult = $this->numA * $this->numB;
    return $mult;

    }

    public function div(){

    $div = $this->numA / $this->numB;
    return $div;

    }

    public function resto(){

    $resto = $this->numA % $this->numB;
    return $resto;

    }

    /**
     * Get the value of numA
     */
    public function getNumA()
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA($numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB()
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB($numB): self
    {
        $this->numB = $numB;

        return $this;
    }

}

$calc = new Calculadora;

$calc->setNumA(readline("Digite o primeiro numero: "));
$calc->setNumB(readline("Digite o segundo numero: "));


echo "Soma: ";
echo $calc->soma();
echo "\n";


echo "Subtracao: ";
echo $calc->sub();
echo "\n";


echo "Multiplicacao: ";
echo $calc->mult();
echo "\n";


echo "Divisao: ";
echo $calc->div();
echo "\n";


echo "Resto: ";
echo $calc->resto();
echo "\n";