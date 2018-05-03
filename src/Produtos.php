<?php
//namespace Usuarios;


class Produtos{

  public $nome=null;
  public $valor=null;

public function __construct(){

  $this->nome=" ";
  $this->valor=" ";
  $this->vNome=&$this->nome;
  $this->vValor=&$this->valor;


}

  use Hidratar;

public function salvar(){

    $attributes=array(':idproduto'=>NULL,':nome'=>$this->vNome,':valor'=>$this->vValor);


      $h = "localhost";
      $b = "trabalho_pos_2017";
      $u = "root";
      $s = "123";

      $tabela = "produto";


      $db = new \PDO("mysql:host=$h;dbname=$b", $u, $s);
      $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);




    	$sql = "INSERT INTO $tabela VALUES(:idproduto,:nome,:valor)";

    	$exec = $db->prepare($sql);

    	$exec->execute($attributes);



  }

}
