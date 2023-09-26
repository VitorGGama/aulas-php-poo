<?php
require_once "Cliente.php";
class PessoaFisica extends Cliente {
    private int $idade;
    private string $cpf;
    


      
     
    public function getIdade(): int
    {
        return $this->idade;
    }

     
     
     
     
    
     
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}