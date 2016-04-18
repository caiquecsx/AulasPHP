<?php

$servidor = 'localhost:3306';
$banco = 'biblioteca';
$usuario = 'root';
$senha = 123;
$link = mysql_connect($servidor, $usuario, $senha);
$db = mysql_select_db($banco, $link);

if(!$link){
  echo "Erro na conexão com o banco";
}

$SQL = "SELECT * FROM livro";
$RS = mysql_query($SQL);
while($RF = mysql_fetch_array($RS)){
  echo "<pre>";
  print_r($RF);
  echo "</pre>";
}

?>
