<?php
class Cliente {

    private string $nome;
    private string $email; 
    private string $senha;
   
    /* Métodos getters e setters */
    public function setNome(string $nome):void {
        $this->nome = $nome;
    }

    public function getNome():string {
        return $this->nome;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of senha
     *
     * @return string
     */
    public function getSenha(): string
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     *
     * @param string $senha
     *
     * @return self
     */
    public function setSenha(string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }
}