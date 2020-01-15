<?php

require './Person.php';

function dump($data) {
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
}

$merlin = new Person("Merlin");
$harry = new Person("Harry");

dump($merlin);
dump($harry);

$merlin->attack($harry);

dump($merlin);
dump($harry);

dump($harry->isDead());

$merlin->attack($harry);
$merlin->attack($harry);
$merlin->attack($harry);
$merlin->attack($harry);

dump($harry->isDead());
