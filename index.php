<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);



require_once  './autoload.php';


use Usuarios;
use Produtos;

$user=new Usuarios();
$user->hidratar(array('email'=>'manoel@gmail.com','senha'=>'4444'));
$user->salvar();

$prod=new Produtos();
$prod->hidratar( array('nome'=>'tablet','valor'=>'500'));
$prod->salvar();


/*$foo=new Foo();

$vars=get_object_vars($foo);

$vars['bar']="testando foi!!";

$foo->show();*/
