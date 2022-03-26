<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Praticando - 01</title>
</head>
<body class="bg-secondary">
    <form action="Comanda.php" method="GET">
    
<?php
    
    include_once('Produto.php');
    include_once('Css Controller.php');
    
    echo $css->ConstructProdutoComida($OvosComBacon);

    echo $css->ConstructProdutoComida($MistoQuente);

    echo $css->ConstructProdutoComida($SanduicheNatural);

    echo $css->ConstructProdutoComida($BoloDeCenoura);
    
    echo $css->ConstructProdutoBebida($cafe);

    echo $css->ConstructProdutoBebida($sucoDeLaranja);

    echo $css->ConstructProdutoBebida($cocaCola);
    
    echo $css->ConstructProdutoBebida($chaDeCamomila);


?> 
    <input class="btn btn-outline-info" type="submit" value="Enviar">
    </form>

    

</body>
</html>