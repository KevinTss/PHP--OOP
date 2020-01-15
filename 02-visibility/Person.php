<?php
class Person {

  public $name;
  public $health = 100;
  public $atk = 20;

  public function __construct($name) {
    $this->name = $name;
  }

  public function regenerate($add = null) {
    if (is_null($add)) {
      $this->health = 100;
    } else {
      $this->health += $add;
    }
  }

  public function isDead() {
    return $this->health === 0;
  }

  public function attack($target) {
    $target->health -= $this->atk;
  }

}