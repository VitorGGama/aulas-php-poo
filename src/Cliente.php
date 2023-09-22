<?php
class Cliente {
    //Propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;    
    /*Método construtor, Permite configurar a forma de inicialização do objeto,
    exigindo a atribuição de dados no momento de criar o objeto/instancia. 
    O construtor é sempre chamado de forma automática assim que o objeto é criado.*/ 
    public function __construct(string $nome, string $email, array $telefones) {
        /*Atribuindo os valores dos parametros ás propriedades. Usamos o $this para acesssar
        as propriedades desta classe*/ 
        $this->nome = $nome;
        $this->email = $email;
        $this->telefones = $telefones;
        }
            
    }


