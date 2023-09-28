<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>

<body>
    <h1>PHP com POO - Exemplo 8</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Propriedades e métodos estáticos</li>
        <li>Acesso direto sem objetos/instancias</li>
        <li>Uso do <code>self</code> para acesso (dentro da classe) aos recursos estáticos.</li>
    </ul>   
   

    <?php
    require_once "src/PessoaFisica.php";
    $cliente1 = new PessoaFisica;
    $cliente1->setNome("Astrogildo");
    $cliente1->setIdade(75);

    $cliente2 = new PessoaFisica;
    $cliente2->setNome("Enzo");
    $cliente2->setIdade(18);


    require_once "src/utilitarios.php";
    Utilitarios::obterData();
    ?>

    <h2>Atendimentos do dia:
    <?=Utilitarios::$dataAtual?></h2>

    <h3>cliente: <?=$cliente1->getNome()?></h3>
    <p>Tipo de atendimento: <?=Utilitarios::definirAtendimento( $cliente1->getIdade())?></p>
    
    <h3>cliente: <?=$cliente2->getNome()?></h3>
    <p>Tipo de atendimento: <?=Utilitarios::definirAtendimento( $cliente2->getIdade())?></p>
    








</body>

</html>