<?php 
namespace Model\Factory;

class Village extends AbstractFactory{

  public function get_all(){
    $q = "SELECT village.*,
                 market.id as has_market,
                 farm.id as has_farm
           FROM village
            LEFT JOIN market ON market.village_id = village.id
            LEFT JOIN farm   ON farm.village_id = village.id
          ;";
    $stmt = $this->pdo->query($q);
    $recettes = $stmt->fetchAll(\PDO::FETCH_CLASS, "\\Model\\Village");


    return $recettes;
  }

  public function add_one($name){
    $q = "INSERT INTO village SET name = :name";
    $stmt = $this->pdo->prepare($q);
    $stmt->execute([":name" => $name]);
    $id = $this->pdo->lastInsertId();

    return $id;
  }

  public function get_one($id){
    $q = "SELECT * FROM village WHERE id = :id";
    $stmt = $this->pdo->prepare($q);
    $stmt->execute([":id" => $id]);
    $recette = $stmt->fetchObject("\\Model\\Village");
    return $recette;
  }
  
  public function add_farm($village_id){
    $q = "INSERT INTO market SET village_id = :village_id";
    $stmt = $this->pdo->prepare($q);
    $stmt->execute([":village_id" => $village_id]);
    $id = $this->pdo->lastInsertId();

    return $id;

  }
  
  public function add_market($village_id){
    $q = "INSERT INTO farm SET 
            village_id = :village_id, stock = 0";
    $stmt = $this->pdo->prepare($q);
    $stmt->execute([":village_id" => $village_id]);
    $id = $this->pdo->lastInsertId();

    return $id;

  }
}