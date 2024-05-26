<?php
//data transfer object - transferencia dos dados do formulario (view)
class ProdutoDTO
{
    private $idPro;
    private $nomePro;
    private $valorCompraPro;
    private $valorVendaPro;
    private $qtdEstoquePro;
    private $imagemPro;
    private $qtdEstoqueMinimoPro;
    private $codigoPro;    

    public function setCodigoPro($codigoPro)
    {
        $this->codigoPro = $codigoPro;

    }
    public function getCodigoPro()
    {
        return $this->codigoPro;
    }
    //
    public function setQtdEstoqueMinimoPro($qtdEstoqueMinimoPro)
    {
        $this->qtdEstoqueMinimoPro = $qtdEstoqueMinimoPro;

    }
    public function getQtdEstoqueMinimoPro()
    {
        return $this->qtdEstoqueMinimoPro;
    }
    public function setImagemPro($imagemPro)
    {
        $this->imagemPro = $imagemPro;

    }
    public function getImagemPro()
    {
        return $this->imagemPro;
    }

    public function setQtdEstoquePro($qtdEstoquePro)
    {
        $this->qtdEstoquePro = $qtdEstoquePro;

    }
    public function getQtdEstoquePro()
    {
        return $this->qtdEstoquePro;
    }

    public function setValorVendaPro($valorVendaPro)
    {
        $this->valorVendaPro = $valorVendaPro;

    }
    public function getValorVendaPro()
    {
        return $this->valorVendaPro;
    }

    public function setNomePro($nomePro)
    {
        $this->nomePro = $nomePro;

    }
    public function getNomePro()
    {
        return $this->nomePro;
    }

    public function setValorCompraPro($valorCompraPro)
    {
        $this->valorCompraPro = $valorCompraPro;

    }
    public function getValorCompraPro()
    {
        return $this->valorCompraPro;
    }

    public function setIdPro($idPro)
    {
        $this->idPro = $idPro;

    }
    public function getIdPro()
    {
        return $this->idPro;
    }

    
}
    
?>