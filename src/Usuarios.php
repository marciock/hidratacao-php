<?php
//namespace Usuarios;

use \PDO;
class Usuarios{

  public $email=null;
  public $senha=null;

public function __construct(){

  $this->email=" ";
  $this->senha=" ";
  $this->vEmail=&$this->email;
  $this->vSenha=&$this->senha;


}

  use Hidratar;

public function salvar(){

    $attributes=array(':id'=>NULL,':email'=>$this->vEmail,':senha'=>$this->vSenha);


      $h = "localhost";
      $b = "trabalho_pos_2017";
      $u = "root";
      $s = "123";

      $tabela = "usuario";


      $db = new PDO("mysql:host=$h;dbname=$b", $u, $s);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




    	$sql = "INSERT INTO $tabela VALUES(:id,:email,:senha)";

    	$exec = $db->prepare($sql);

    	$exec->execute($attributes);



  }

}
