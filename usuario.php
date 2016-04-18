<?php

  abstract class Usuario{

    private $usuario;
    private $senha;
    public static $nro_usuarios_online = 0;

    abstract protected function logar();

    function __construct(){
      echo "sejam bem vindos!";
      self::alteraNroUsuariosOnline(+1);
    }

    function __destruct(){
      echo "bye";
      self::alteraNroUsuariosOnline(-1);
    }

    static function alteraNroUsuariosOnline($add_or_remove){
      self::$nro_usuarios_online += $add_or_remove;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

}

?>
