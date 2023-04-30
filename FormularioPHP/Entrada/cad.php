<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<main> 
    <?php
            // Metodo de envio GET, denfinido no html
            $nome = $_GET ["nome"];
            // ["nome"] está puxando o dado inserido no input
            $sobrenome = $_GET ["sobrenome"];
            echo " Olá , seja bem-vindo(a) , $nome $sobrenome ❤️ "; 
        ?>
        
        <p><a href="javascript:history.go(-1)"> Voltar para página anterior </a></p>
</main>
</body>
</html>
