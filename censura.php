<?php
$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censura'];

echo "Paragrafo originale: $paragrafo<br>";
echo "Lunghezza paragrafo originale: " . strlen($paragrafo) . "<br>";

$paragrafo_censurato = str_replace($censura, '***', $paragrafo);

echo "Paragrafo censurato: $paragrafo_censurato<br>";
echo "Lunghezza paragrafo censurato: " . strlen($paragrafo_censurato);
?>