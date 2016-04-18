<?php
include_once 'usuario.php';

class UsuarioComum extends Usuario{
  private $nro_vezes_acessado = 0;

  function __construct(){
    parent::__construct();
    $this->setNroVezesAcessado($this->nro_vezes_acessado + 1);
  }

  function __destruct(){
    parent::__destruct();
  }

  public function logar(){

  }

  //this é uma pseudo variavel que referencia o objeto chamador do metodo
  public function getNroVezesAcessado(){
        return $this->nro_vezes_acessado;
  }

  public function setNroVezesAcessado($nro_vezes_acessado){
        $this->nro_vezes_acessado = $nro_vezes_acessado;

        return $this;
  }

}
?>
