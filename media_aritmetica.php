<div class="titulo">CALCULAR MEDIA ARITMÉTICA</div>

<form action="#" method="post">
    <input type="text" name="nota1">
    <input type="text" name="nota2">
    <input type="text" name="nota3">
    <input type="text" name="nota4">
    <button>CALCULAR</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const NUMERO_DE_NOTAS = 4;
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$somaNotas = $nota1 + $nota2 + $nota3 + $nota4;
$mediaAritmetica = $somaNotas / NUMERO_DE_NOTAS;

echo "<br> Sua média final é: $mediaAritmetica"; 