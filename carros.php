<?php

class Carros {

    // atributos
    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;

    // métodos
    function maisRapido() {

        return "O carro mais rapido é: " . $this->modelo . ", " . $this->marca .
        ". Fabricado em " . $this->anoFabricacao .
        ", com velocidade maxima de " . $this->velocidadeMax . " Km/h";
    }

    function maisLento() {

        return "O carro mais lento é: " . $this->modelo . ", " . $this->marca .
        ". Fabricado em " . $this->anoFabricacao .
        ", com velocidade maxima de " . $this->velocidadeMax . " Km/h";
    }

    // getters e setters

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo): self {
        $this->modelo = $modelo;
        return $this;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca): self {
        $this->marca = $marca;
        return $this;
    }

    public function getAnoFabricacao() {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao($anoFabricacao): self {
        $this->anoFabricacao = $anoFabricacao;
        return $this;
    }

    public function getVelocidadeMax() {
        return $this->velocidadeMax;
    }

    public function setVelocidadeMax($velocidadeMax): self {
        $this->velocidadeMax = $velocidadeMax;
        return $this;
    }
}



$carro = new Carros;
echo "***CARRO 1***\n";
$carro->setModelo(readline("Digite o modelo do carro: "));
$carro->setMarca(readline("Digite a marca do carro: "));
$carro->setAnoFabricacao(readline("Digite o ano de fabricacao do carro: "));
$carro->setVelocidadeMax(readline("Digite a velocidade maxima do carro: "));



$carro2 = new Carros;
echo "\n***CARRO 2***\n";
$carro2->setModelo(readline("Digite o modelo do carro: "));
$carro2->setMarca(readline("Digite a marca do carro: "));
$carro2->setAnoFabricacao(readline("Digite o ano de fabricacao do carro: "));
$carro2->setVelocidadeMax(readline("Digite a velocidade maxima do carro: "));



$carro3 = new Carros;
echo "\n***CARRO 3***\n";
$carro3->setModelo(readline("Digite o modelo do carro: "));
$carro3->setMarca(readline("Digite a marca do carro: "));
$carro3->setAnoFabricacao(readline("Digite o ano de fabricacao do carro: "));
$carro3->setVelocidadeMax(readline("Digite a velocidade maxima do carro: "));


$carroMaisRapido = $carro;

if ($carro2->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax()) {
    $carroMaisRapido = $carro2;
}

if ($carro3->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax()) {
    $carroMaisRapido = $carro3;
}


echo "\n\nDados do carro mais rapido:\n";
echo $carroMaisRapido->maisRapido();


$carroMaisLento = $carro;

if ($carro2->getVelocidadeMax() < $carroMaisLento->getVelocidadeMax()) {
    $carroMaisLento = $carro2;
}

if ($carro3->getVelocidadeMax() < $carroMaisLento->getVelocidadeMax()) {
    $carroMaisLento = $carro3;
}

echo "\n\nDados do carro mais lento:\n";
echo $carroMaisLento->maisLento();