<?php

namespace Controller;

use \Library\Request;
use \Model\Factory\Village as VillageFactory;
use \Model\Factory\Villager as VillagerFactory;
use \Model\Factory\Market as MarketFactory;
use \Model\Factory\Farm as FarmFactory;

class Village extends General{

  public function newAction(Request $request){
    $name = $request->get("name");
    $villageFactory = new VillageFactory($this->pdo);
    $new_id = $villageFactory->add_one($name);

    header("Location: /");
  }

  public function add_marketAction(Request $request){

    $village_id = $request->get("village_id");

    $marketFactory = new MarketFactory($this->pdo);
    $market_nb = $marketFactory->countInVillage($village_id);

    if($market_nb > 0){
      throw new \Exception("Il y a déjà un marché dans cette ville");
    }

    $villageFactory = new VillageFactory($this->pdo);
    $villageFactory->add_market($village_id);

    header("Location: /");
  }

  public function add_farmAction(Request $request){
    var_dump($request);
    $village_id = $request->get("village_id");
    var_dump($village_id);
    $farmFactory = new FarmFactory($this->pdo);
    $farm_nb = $farmFactory->countInVillage($village_id);

    if($farm_nb > 0){
      throw new \Exception("Il y a déjà une ferme dans cette ville");
    }

    $villageFactory = new VillageFactory($this->pdo);
    $villageFactory->add_farm($village_id);

    header("Location: /");
  }



}