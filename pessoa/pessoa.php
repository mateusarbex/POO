<?php
class Pessoa
{
    private $nome;
    private $cpf;
    private $data_nasc;
    private $peso;
    private $altura;
    private $cor_da_pele;
    private $sexo;

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

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of data_nasc
     */
    public function getData_nasc()
    {
        return $this->data_nasc;
    }

    /**
     * Set the value of data_nasc
     *
     * @return  self
     */
    public function setData_nasc($data_nasc)
    {
        $this->data_nasc = $data_nasc;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of cor_da_pele
     */
    public function getCor_da_pele()
    {
        return $this->cor_da_pele;
    }

    /**
     * Set the value of cor_da_pele
     *
     * @return  self
     */
    public function setCor_da_pele($cor_da_pele)
    {
        $this->cor_da_pele = $cor_da_pele;

        return $this;
    }

    /**
     * Get the value of sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
}
