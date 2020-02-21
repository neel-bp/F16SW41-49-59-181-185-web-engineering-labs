<?php

class Item implements JsonSerializable{
  private $name;
  private $price;
  private $desc;

  public function __construct($name, $price, $desc = ''){
    $this->name = $name;
    $this->price = $price;
    $this->desc = $desc;
  }

  public function getName(){  return $this->name; }
  public function getPrice(){  return $this->price; }
  public function getDesc(){  return $this->desc; }

  public function jsonSerialize(){
    return [
      'name' => $this->name,
      'price' => $this->price,
      'desc' => $this->desc
    ];
  }
}

?>