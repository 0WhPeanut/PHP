<?php

class Pessoa {

    //atributos

    private $nome;
    private $sobrenome;
    private $idade;



   //metodos

    function retornoApresentacao(){

        $dados = "Olá, sou " . $this->nome;
        $dados .= " " . $this->sobrenome;
        $dados .= " e tenho " . $this->idade;
        $dados .= " anos\n";
        return $dados;

    }

    
    public function getNome()
    {
        return $this->nome;
    }

    
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    
    public function getSobrenome()
    {
        return $this->sobrenome;
    }


    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$pessoa = new Pessoa();
$pessoa ->setNome("Luca");
$pessoa ->setSobrenome("Tawil");
$pessoa ->setIdade(15);
echo "Nome da pessoa: " . $pessoa->getNome() . "\n";
echo $pessoa->retornoApresentacao();