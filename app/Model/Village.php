<?php
namespace Model;

class Village{

  private $villagers = [];
  private $has_market = null;
  private $has_farm = "non";

  public function getName(){
    return $this->name;
  }

  public function addVillager($villager){
    $this->villagers = $villager;
  }

  public function getVillagers(){
    return $this->villagers;
  }

  public function hasMarket(){
    return !is_null($this->has_market);
  }
  
  public function hasFarm(){
    return !is_null($this->has_farm);
  }

}