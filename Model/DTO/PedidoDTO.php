<?php
//data transfer object - transferencia dos dados do formulario (view)
class PedidoDTO
{
    private $idPed;
    private $dataHoraPed;
    private $valorTotalPed;
    private $situacaoPed;
    private $formapagamentoPed;

    public function setFormapagamentoPed($formapagamentoPed)
    {
        $this->formapagamentoPed = $formapagamentoPed;

    }
    public function getFormapagamentoPed()
    {
        return $this->formapagamentoPed;
    }

    public function setSituacaoPed($situacaoPed)
    {
        $this->situacaoPed = $situacaoPed;

    }
    public function getSituacaoPed()
    {
        return $this->situacaoPed;
    }

    public function setDataHoraPed($dataHoraPed)
    {
        $this->dataHoraPed = $dataHoraPed;

    }
    public function getDataHoraPed()
    {
        return $this->dataHoraPed;
    }

    public function setValorTotalPed($valorTotalPed)
    {
        $this->valorTotalPed = $valorTotalPed;

    }
    public function getValorTotalPed()
    {
        return $this->valorTotalPed;
    }

    public function setIdPed($idPed)
    {
        $this->idPed = $idPed;

    }
    public function getIdPed()
    {
        return $this->idPed;
    }
    
}
    
?>