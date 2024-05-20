<?php
class FornecedorDTO
{
    private $idFor;
    private $nomeFor;
    private $telefoneFor;
    private $emailFor;


  public function setIdFor($idFor)
    {
        $this->idFor = $idFor;

    }
    public function getIdFor()
    {
        return $this->idFor;
    }
  public function setEmailFor($emailFor)
    {
        $this->emailFor = $emailFor;

    }
    public function getEmailFor()
    {
        return $this->emailFor;
    }
 public function setTelefoneFor($telefoneFor)
    {
        $this->telefoneFor = $telefoneFor;
        
    }
    public function getTelefoneFor()
    {
        return $this->telefoneFor;
    }

public function setNomeFor($nomeFor)
    {
        $this->nomeFor = $nomeFor;

    }
    public function getNomeFor()
    {
        return $this->nomeFor;
    }
}

?>