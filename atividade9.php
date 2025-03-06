<?php
function validarEmail($email) {

    if (strpos($email, '@') === false || strpos($email, '.') === false) {
        return "O e-mail '$email' não é válido. Ele deve conter '@' e '.'.";
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "O e-mail '$email' é válido.";
    } else {
        return "O e-mail '$email' não é válido.";
    }
}

echo validarEmail("usuario@example.com") . "\n";
echo "<br>";
echo validarEmail("usuario.example.com") . "\n"; 
echo "<br>";
echo validarEmail("usuario@example") . "\n"; 
echo "<br>";
echo validarEmail("usuario@com.") . "\n"; 
?>