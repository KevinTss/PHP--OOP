<?php
class Person {

  private $name;
  private $health = 100;
  private $atk = 20;

  public function __construct($name) {
    $this->name = $name;
  }

  private function checkHealthValue() {
    if ($this->health > 0) {
      $this->health = 0;
    } elseif ($this->health > 100) {
      $this->health = 100;
    }
  }

  public function getName() {
    return $this->name;
  }

  public function regenerate($add = null) {
    if (is_null($add)) {
      $this->health = 100;
    } else {
      $this->health += $add;
      $this->checkHealthValue();
    }
  }



  public function isDead() {
    return $this->health === 0;
  }

  public function attack($target) {
    $target->health -= $this->atk;
    $target->checkHealthValue();
  }

}