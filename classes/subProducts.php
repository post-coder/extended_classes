<?php
@include_once __DIR__ . "/product.php";


class Food extends Product {
  private $weight;
  private $type;
  private $referenceAnimal;

  function __construct(int $_id, string $_name, float $_price, float $_weight, string $_type, string $_referenceAnimal)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->price = $_price;
    $this->weight = $_weight;
    $this->type = $_type;
    $this->referenceAnimal = $_referenceAnimal;
  }

  public function setWeight(float $_weight) {
    $this->weight = $_weight;
  }

  public function getWeight() {
    return $this->weight;
  }
}