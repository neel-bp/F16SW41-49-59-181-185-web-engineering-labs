<?php

class Cart implements JsonSerializable{

  private $items;

  public function __construct(){
    $this->items = array(); 
  }

  public function addToCart($item){
    array_push($this->items, $item);
  }

  public function removeFromCart($item){
    $found = in_array($item, $this->items);
    if($found){
      $key = array_search($item, $this->items);
      unset($this->items[$key]);
    }
  }

  function totalItems(){
    return count($this->items);
  } 

  public function calculateTotal(){
    $total = 0;
    foreach($this->items as $item){
      $total += $item->getPrice();
    }
    return $total;
  }

  public function getItems(){
    return $this->items;
  }
  
  public function jsonSerialize(){
    return [
      'items' => $this->items
    ];
  }
}

?>