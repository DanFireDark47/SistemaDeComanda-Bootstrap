<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Comanda</title>
</head>
<body class="bg-secondary">

<?php
include_once('Produto.php');
$Resultado = 0;

echo "<div class='w-auto h-auto position-absolute top-50 start-50 translate-middle mx-auto bg-dark p-3 rounded'>";
echo "<div class='text-light'>";
echo "<ul class='list-group-flush p-0 rounded'>";
if(isset($_GET['OvosComBacon'])){

    echo $OvosComBacon->getNomePreco();
    $Resultado += $OvosComBacon->getPreco();
}
if(isset($_GET['MistoQuente'])){

    echo $MistoQuente->getNomePreco();
    $Resultado += $MistoQuente->getPreco();
}
if(isset($_GET['SanduicheNatural'])){

    echo $SanduicheNatural->getNomePreco();
    $Resultado += $SanduicheNatural->getPreco();
}
if(isset($_GET['cafe'])){

    echo $cafe->getNomePreco();
    $Resultado += $cafe->getPreco();
}
if(isset($_GET['sucoDeLaranja'])){

    echo $sucoDeLaranja->getNomePreco();
    $Resultado += $sucoDeLaranja->getPreco();
}

if(isset($_GET['cocaCola'])){

    echo $cocaCola->getNomePreco();
    $Resultado += $cocaCola->getPreco();
}

if(isset($_GET['BoloDeCenoura'])){

    echo $BoloDeCenoura->getNomePreco();
    $Resultado += $BoloDeCenoura->getPreco();
}

if(isset($_GET['chaDeCamomila'])){

    echo $chaDeCamomila->getNomePreco();
    $Resultado += $chaDeCamomila->getPreco();
}
echo "</ul>";
echo "<Strong class='container-fluid'> Total a Pagar: " .$Resultado. "</Strong>";
echo "<a class='btn btn-outline-info' href='index.php'>Voltar</a>";
echo "</div>";
echo "</div>";
?>
    
</body>
</html>