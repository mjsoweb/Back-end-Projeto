<?php
//data transfer object - transferencia dos dados do formulario (view)
class UsuarioDTO
{
    private $idUsu;
    private $cpfUsu;
    private $nomeUsu;
    private $telefoneUsu;
    private $emailUsu;
    private $senhaUsu;
    private $perfilUsu;
    private $situacaoUsu;
    private $sobrenomeUsu;


    public function setSituacaoUsu($situacaoUsu)
    {
        $this->situacaoUsu = $situacaoUsu;

    }
    public function getSituacaoUsu()
    {
        return $this->situacaoUsu;
    }
    //
    public function setPerfilUsu($perfilUsu)
    {
        $this->perfilUsu = $perfilUsu;

    }
    public function getPerfilUsu()
    {
        return $this->perfilUsu;
    }
    public function setSenhaUsu($senhaUsu)
    {
        $this->senhaUsu = $senhaUsu;

    }
    public function getSenhaUsu()
    {
        return $this->senhaUsu;
    }

    public function setEmailUsu($emailUsu)
    {
        $this->emailUsu = $emailUsu;

    }
    public function getEmailUsu()
    {
        return $this->emailUsu;
    }

    public function setTelefoneUsu($telefoneUsu)
    {
        $this->telefoneUsu = $telefoneUsu;

    }
    public function getTelefoneUsu()
    {
        return $this->telefoneUsu;
    }

    public function setCpfUsu($cpfUsu)
    {
        $this->cpfUsu = $cpfUsu;

    }
    public function getCpfUsu()
    {
        return $this->cpfUsu;
    }

    public function setNomeUsu($nomeUsu)
    {
        $this->nomeUsu = $nomeUsu;

    }
    public function getNomeUsu()
    {
        return $this->nomeUsu;
    }
    public function setSobrenomeUsu($sobrenomeUsu)
    {
        $this->nomeUsu = $sobrenomeUsu;

    }
    public function getSobrenomeUsu()
    {
        return $this->sobrenomeUsu;
    }

    public function setidUsu($idUsu)
    {
        $this->idUsu = $idUsu;

    }
    public function getidUsu()
    {
        return $this->idUsu;
    }
}
?>