<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10</title>
</head>

<body>
    <h1>PHP com POO - Exemplo 9</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Composer: gerenciador de dependência PHP</li>
        <li>Configurar o projeto com Composer usando <code>composer.json</code></li>
        <li>Autoload de classes evitando muitos requires e/ou require manuais</li>
    </ul>


    <?php

    use Fornecedor\Pagamento;
    use Prestador\Pagamento as PrestadorPagamento;
    use Tabajara\Escola;
    use Tabajara\MEI;
    use Tabajara\PessoaFisica;
    use Tabajara\PessoaJuridica;

    //require_once "src/fornecedores/Pagamento.php";
    //require_once "src/prestadores/Pagamento.php";
    //require_once "src/PessoaFisica.php";
    //require_once "src/PessoaJuridica.php";
    //require_once "src/MEI.php";
    require_once "vendor/autoload.php";



    $pagamentoFornecedor = new Pagamento;
    $pagamentoPrestador = new PrestadorPagamento;


    $pessoaFisica = new PessoaFisica;
    $pessoaFisica->setNome("Vitor");
    $pessoaFisica->setCPF("234.567.897-56");
    $pessoaFisica->setIdade(40);


    $pessoaJuridica = new PessoaJuridica;
    $pessoaJuridica->setNome("Empresa XYZ");
    $pessoaJuridica->setCNPJ("12.345.678/0001-99");
    $pessoaJuridica->setEmail("consultoria@consultoria.com");


    $mei = new MEI;
    $mei->setAreaDeAtuacao("MEI ABC");
    $mei->setCNPJ("98.765.432/0001-11");
    $mei->setAreaDeAtuacao("Comércio de Produtos");
    ?>

    <h2>Dados do Cliente Pessoa Física</h2>
    <p>Nome: <?php echo $pessoaFisica->getNome(); ?></p>
    <p>CPF: <?php echo $pessoaFisica->getCPF(); ?></p>
    <p>Idade: <?php echo $pessoaFisica->getIdade(); ?></p>

    <h2>Dados do Cliente Pessoa Jurídica</h2>
    <p>Nome: <?php echo $pessoaJuridica->getNome(); ?></p>
    <p>CNPJ: <?php echo $pessoaJuridica->getCNPJ(); ?></p>
    <p>Email: <?php echo $pessoaJuridica->getEmail(); ?></p>

    <h2>Dados do Cliente MEI</h2>
    <p>Área de Atuação: <?php echo $mei->getAreaDeAtuacao(); ?></p>
    <p>CNPJ: <?php echo $mei->getCNPJ(); ?></p>
    <p>Área de Atuação: <?php echo $mei->getAreaDeAtuacao(); ?></p>

    <hr>

    <?php
    $escola = new Escola;
    var_dump($escola);

    ?>
</body>

</html>