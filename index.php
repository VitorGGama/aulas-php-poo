<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança (Super Classe e Sub Classe)</li>
        <li>Métodos/propriedades protegidos (acessíveis apenas pela classe em que foram definidos e pelas subclasses)</li>
        <li>Classe abstrata</li>
        <li>Classe final</li>
    </ul>

<?php
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";

$clientePF = new PessoaFisica;
$clientePJ = new PessoaJuridica;

$clientePF->setNome("Fulano");
$clientePF->setEmail("fulano@gmail.com");
$clientePF->setIdade(20);
$clientePF->setCpf("123.456.789-00");


$clientePJ->setNome("Beltrano S/A");
$clientePJ->setEmail("blabla@gmail.com");
$clientePJ->setAnoFundacao(2000);
$clientePJ->setCnpj("32.088.0001/000.41");
$clientePJ->setNomeFantasia("Bla Bla Informática");
?>

<pre> <?=var_dump($clientePF, $clientePJ)?> </pre>

<?php
require_once "src/Cliente.php";
$clienteGenerico = new Cliente;
?>
<pre><?=var_dump($clienteGenerico)?></pre>


</body>
</html>
