<?php
$diasSemana = [
    'Sunday' => 'Domingo',
    'Monday' => 'Segunda-feira',
    'Tuesday' => 'Terça-feira',
    'Wednesday' => 'Quarta-feira',
    'Thursday' => 'Quinta-feira',
    'Friday' => 'Sexta-feira',
    'Saturday' => 'Sábado'
];

$meses = [
    'January' => 'Janeiro',
    'February' => 'Fevereiro',
    'March' => 'Março',
    'April' => 'Abril',
    'May' => 'Maio',
    'June' => 'Junho',
    'July' => 'Julho',
    'August' => 'Agosto',
    'September' => 'Setembro',
    'October' => 'Outubro',
    'November' => 'Novembro',
    'December' => 'Dezembro'
];

$dataAtual = time();
$diaSemanaIngles = date('l', $dataAtual);
$diaMes = date('d', $dataAtual);
$mesIngles = date('F', $dataAtual);
$ano = date('Y', $dataAtual);
$diaSemanaPt = $diasSemana[$diaSemanaIngles];
$mesPt = $meses[$mesIngles];

echo "$diaSemanaPt, $diaMes de $mesPt de $ano";
?>