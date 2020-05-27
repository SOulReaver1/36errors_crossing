<?php

namespace Controller;

use \Library\Request;
use \Model\Factory\Village as VillageFactory;
use \Model\Factory\Villager as VillagerFactory;
use \Model\Factory\Market as MarketFactory;
use \Model\Factory\Farm as FarmFactory;

class Villager extends General{

  public function createAction(Request $request){
    var_dump($request);
    $name = $request->get("name");
    $village_id = $request->get("village_id");

    $villagerFactory = new VillagerFactory($this->pdo);
    $new_id = $villagerFactory->add_one($name);
    $villager = $villagerFactory->get_one($new_id);

    $villagerFactory->moveVillagerTo($villager, $village_id);

    header("Location: /");
  }

}