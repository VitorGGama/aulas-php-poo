<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 9</title>
</head>

<body>
    <h1>PHP com POO - Exemplo 9</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li><code>Namesspaces</code>: agrupamento de recursos (classes, funções, constantes)</li>
        <li>Prevenção de conflitos entre classes de mesmo nome</li>
        <li>Configurar e usar <code>Namesspaces</code> e alias</li>
    </ul>   
   

   <?php
   /* Só de fazer requice já dá erro no servidor, devido a terem o mesmo nome.*/
   require_once "src/fornecedores/pagamento.php";
   require_once "src/prestadores/pagamento.php";

   ?>
    








</body>

</html>