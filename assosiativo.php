<?php
$pessoa = array("nome" => "Daniel",
                "profissao" =>"Professor",
                "idade" => 28);
echo "O professor tem " . $pessoa["idade"] . " anos\n";
foreach($pessoa as $chave => $dado){
    echo"" . $chave . ": " . $dado . "\n";}