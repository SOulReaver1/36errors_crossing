<?php
namespace Controller;

abstract class General {

  public $pdo;

  public function __construct(\PDO $pdo){
    $this->pdo = $pdo;
  }

}