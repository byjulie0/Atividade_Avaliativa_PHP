<?php
function removerVogais($string) {
    $stringSemVogais = preg_replace('/[aeiouAEIOU]/', '', $string);
    return $stringSemVogais;
}

$texto = "programação";
$resultado = removerVogais($texto);
echo $resultado;
?>