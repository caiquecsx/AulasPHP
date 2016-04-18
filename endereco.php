<?php

include_once 'empregado.php'

class Endereco extends Empregado{
  private $pais;
  private $cidade;
  private $rua;
  private $numero;

    /**
     * Get the value of Pais
     *
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of Pais
     *
     * @param mixed pais
     *
     * @return self
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of Cidade
     *
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of Cidade
     *
     * @param mixed cidade
     *
     * @return self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of Rua
     *
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set the value of Rua
     *
     * @param mixed rua
     *
     * @return self
     */
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get the value of Numero
     *
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of Numero
     *
     * @param mixed numero
     *
     * @return self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

}

?>
