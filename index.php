<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
    <title>Exemplo 3</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 4</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Encapsulamento      
        </li>
        <li>Uso do <code>$this</code> para acesso ás propriedades dentro do objeto</li>
    </ul>

    <?php
    require_once "src/Cliente.php";
    $clienteA = new Cliente;
    
    //$clienteA->nome = "Vitor";

  /*Usando o setter para atribuir um valor à propriedade privada "nome"*/ 
  $clienteA->setNome("Fulano da Silva");
    ?>

    <pre><?=var_dump($clienteA)?></pre>

    

   

</body>
</html>