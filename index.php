<?php

class Team {

  protected $name;

  protected $members = [];

  public function __construct($name, $members = []) {
    $this->name = $name;
    $this->members = $members;
  }

  public static function start(...$params) {
    return new static(...$params);
  }

  public function name($name) {
    return $this->name;
  }

  public function members() {
    return $this->members;
  }
  public function add($name) {
    $this->members[] = $name;
  }
  public function cancel() {

  }
  public function manage() {

  }
}

class Members {
  protected $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function lastViewed() {

  }
}

$acme = Team::start('acme', [
  new Members('James'),
  new Members('Tommy')
]);


var_dump($acme->members());
// require 'index.view.php';