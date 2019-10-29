
<?php
class Edicoes{
    public $numEdicao;
    public $dataEdicao;
    public $numArtigos;

    function SetEdicao($numEdicao,$dataEdicao,$numArtigos){
        $this->numEdicao = $numEdicao;
        $this->dataEdicao = $dataEdicao;
        $this->numArtigos  = $numArtigos;
    }

    function GetEdicao(){
        return "Numero Edição: {$this->numEdicao},
        Data de Edição: {$this->dataEdicao}, Numero de Artigos: {$this->numArtigos}";
    }

}
?>