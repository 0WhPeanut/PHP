<?php
class Pokemon {
    public $nome;
    public $tipo;
    public $experiencia;
    public $pontosDeVida;
    public $ataque;
    public $defesa;
    public $velocidade;

    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->experiencia = 1;
        $this->successoChance = 0.5;
    }

    public function batalha(): string {
        $rolar = random_int(1, 2);
        $precisa = $this->successoChance * 100;

        if ($rolar <= $precisa) {
            $this->experiencia++;
            $this->successoChance = max(0.1, $this->successoChance - 0.1); 
            return "Sucesso! {$this->nome} agora é nível {$this->experiencia}. Nova chance: " . ($this->successoChance * 100) . "%";
        } else {
            $this->successoChance = min(1.0, $this->successoChance + 0.2); 
            return "Falha! {$this->nome} continua nível {$this->experiencia}. Chance aumentou para: " . ($this->successoChance * 100) . "%";
        }
    }

    public function PegarInfo(): string {
        return "{$this->nome} - Nível: {$this->experiencia} - Chance de Up: " . ($this->successoChance * 100) . "%";
    }
}

// --- Uso ---
$minhaEspada = new Sword("Espada Sagrada");

echo $minhaEspada->PegarInfo() . "\n";
echo $minhaEspada->Batalha() . "\n"; // Tenta o upgrade
echo $minhaEspada->Batalha() . "\n"; // Tenta de novo
echo $minhaEspada->PegarInfo() . "\n";
?>

}
}
