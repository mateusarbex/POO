<?php
class Aluno{
    private $codAluno;
    public $turma;
    /**
     * Get the value of codAluno
     */ 
    public function getCodAluno()
    {
        return $this->codAluno;
    }

    /**
     * Set the value of codAluno
     *
     * @return  self
     */ 
    public function setCodAluno($codAluno)
    {
        $this->codAluno = $codAluno;

        return $this;
    }

    private $nome;
    

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    private $email;


    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    private $telefone;
    

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
  
    public function ListarDados(){
        echo '<div>'. $this->getCodAluno();
        echo ' ' .  $this->getNome();
        echo ' ' .  $this->getEmail();
        echo ' ' .  $this->getTelefone() . '</div>';
    }
    
}




?>