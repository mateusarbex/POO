<?php
require 'aluno.php';
class Turma{

    public $codTurma;
    public $sala;
    public $horario;
    public $aluno = new Aluno();

    


    /**
     * Get the value of codTurma
     */ 
    public function getCodTurma()
    {
        return $this->codTurma;
    }

    /**
     * Set the value of codTurma
     *
     * @return  self
     */ 
    public function setCodTurma($codTurma)
    {
        $this->codTurma = $codTurma;

        return $this;
    }

    /**
     * Get the value of sala
     */ 
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Set the value of sala
     *
     * @return  self
     */ 
    public function setSala($sala)
    {
        $this->sala = $sala;

        return $this;
    }

    /**
     * Get the value of horario
     */ 
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set the value of horario
     *
     * @return  self
     */ 
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }
}



?>