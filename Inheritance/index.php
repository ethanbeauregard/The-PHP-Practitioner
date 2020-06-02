<?php

// class CoffeeMaker {
//   public function brew() {
//     var_dump('Is brewing coffee');
//   }
// }

// class SpecialCoffeeMaker extends CoffeeMaker {
//   public function brewLatte() {
//     var_dump('Is brewing latte');
//   }
// }

// (new SpecialCoffeeMaker())->brew();


class Collection {
  protected $items;

  public function __construct(array $items) {
    $this->items = $items;
  }

  public function sum($key) {
    return array_sum(array_column($this->items, $key));
  }
}

class VideosCollection extends Collection {
  public function length() {
    return $this->sum('length');
  }
}

class Video {
  public $title;
  public $length;

  public function __construct($title, $length) {
    $this->title = $title;
    $this->length = $length;
  }
}

$videos = new VideosCollection([
  new Video('Some Vid', 100),
  new Video('Some Vid 2', 200),
  new Video('Some Vid 3', 300),
]);


echo $videos->length();