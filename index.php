<?php 

class Task {

  public $description;

  public $completed = false;
  
  public function __construct($description) {
    $this->description = $description;
  }

  public function complete() {
    $this->completed = true;
  }

  public function iscomplete() {
    $this->completed;
  }
}

$tasks = [
  new Task('Go to the store'),
  new Task('Pick up eggs'),
  new Task('Pick up bread')
];

$tasks[0]->complete();


require 'index.view.php';