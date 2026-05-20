<?php

$v = array(1, 2, 3, 4, 5);

echo "segunda posiçao do array: " . $v[1];
echo "\n";

echo "Quarta possição do array: " . $v[3];
echo "\n";

array_push($v, 200);

$tamanho = count($v);
for($i=0; $i<$tamanho; $i++);
    echo $v[$i] . ", ";
echo "\n";

foreach($v as $valor){
    echo $valor . ", ";
}
echo "\n";
print_r($v);