<?php

$pessoa = array("nome" => "Manuel de Medeiros",
                "endereço" =>"Rua das Acácias",
                "cidade" => "Foz do Iguaçu",
                "estado" => "PR");

$pessoa2 = array("nome" => "Manuel de Medeiros",
                "endereço" =>"Rua das Acácias",
                "cidade" => "Foz do Iguaçu",
                "estado" => "PR");

$pessoa3 = array("nome" => "Manuel de Medeiros",
                "endereço" =>"Rua das Acácias",
                "cidade" => "Foz do Iguaçu",
                "estado" => "PR");

$pessoa4 = array("nome" => "Manuel de Medeiros",
                "endereço" =>"Rua das Acácias",
                "cidade" => "Foz do Iguaçu",
                "estado" => "PR");

$pessoas = array($pessoa, $pessoa2, $pessoa3, $pessoa4);

foreach ($pessoas as $CIVI) {
    echo $CIVI["nome"] . " | " . $CIVI["endereço"] . " | " . $CIVI["cidade"] . " | " . $CIVI["estado"] . "\n";
}