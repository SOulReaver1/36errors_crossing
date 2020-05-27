<?php 
namespace Model\Factory;

class Farm extends AbstractFactory{

  public function get_all(){
    $q = "SELECT * FROM farm;";
    $stmt = $this->pdo->query($q);
    $farms = $stmt->fetchAll(\PDO::FETCH_CLASS, "\\Model\\Farm");
    return $farms;
  }

  public function grow($farm){
    $q = "UPDATE farm SET stock = stock+3 WHERE id = :farm_id";
    $stmt = $this->pdo->prepare($q);
    
    return 1;
  }

  public function saveStock($farm, $newStock){
    $q = "UPDATE farm SET stock = :stock WHERE id = :farm_id";
    $stmt = $this->pdo->prepare($q);
    $stmt->execute([":farm_id" => $farm->id,
                    ":stock"   => $newStock
                   ]);
    return 1;
  }

  public function countInVillage($village_id){
    $q = "SELECT COUNT(1) as c FROM market WHERE village_id = :village_id";
    $stmt = $this->pdo->prepare($q);
    $stmt->execute([":village_id" => $village_id]);
    $count = $stmt->fetchColumn();
    
    return $count;
  }

}