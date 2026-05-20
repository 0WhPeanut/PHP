<?php

class Cidade{

    private $populacao;
    private $nome;
    private $area;

    
    public function aumentarPopulação(){}

    public function modificarArea(){}

    /**
     * Get the value of populacao
     */
    public function getPopulacao()
    {
        return $this->populacao;
    }

    /**
     * Set the value of populacao
     */
    public function setPopulacao($populacao): self
    {
        $this->populacao = $populacao;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of area
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set the value of area
     */
    public function setArea($area): self
    {
        $this->area = $area;

        return $this;
    }
}

$cidade = new Cidade();

do {
$nome = readline("Escreva o nome da sua cidade: ");
$populacao = readline("Defina a sua população: ");
$area = readline("Defina a area: ");

print("\n\n=========\nCidade: $nome\nPopulação: $populacao\nArea: $area\n\n\n");
$theChoice = readline("Deseja alterar as informaçoes?\nQualquer tecla - Sim\n0 - Não\n\n");

}
while ($theChoice != 0);
