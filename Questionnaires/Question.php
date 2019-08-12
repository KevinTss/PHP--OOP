<?php

class Question {

  public $questions;
  public $reponses;

  public function __construct() {
    $this->questions = array("Volvo", "BMW", "Toyota");
    $this->reponses = array("Volvor", "BMNWr", "Toyotar");
  }

  public function loadQuestion($i) {
    return $this->questions[$i];
  }

  public function loadReponse($i) {
    return $this->reponses[$i];
  }

  public function nbQuestions() {
    return sizeof($this->questions);
  }

}