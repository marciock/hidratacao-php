<?php
//namespace Hidratar;


trait Hidratar
{

  public function hidratar($sql){
      $myClass=get_object_vars($this);
      foreach ($sql as $key => $value) {

          $myClass[$key]=$value;
      }


  }
}
