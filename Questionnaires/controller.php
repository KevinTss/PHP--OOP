<?php

// On commence toujours par demarrer la session du coup on a accès à la variable globale $_SESSION
session_start();

// ceci est juste une fonction homemade que j'ai fait pour avoir une meilleure présentation avec le var_dump traditionnel
function dump($data) {
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
}

// Je recupère ma classe question (qui est le model)
require  'Question.php';

echo '<h1>Coucou</h1>';

// Je crée l'instance du model (qui est déjà fait dans tes examples)
$questionnaire = new Question();

echo "<br>";

// Si'il n'y a pas de valeur "q" en session, j'en crée une et lui assigne 0
if (!isset($_SESSION["q"])) {
  $_SESSION["q"] = 0;
}

// Je crée dans tout les cas (ou remplace si ça existe déjà) le nombre de tentatives
$_SESSION["tentative"] = 0;


// Exemple d'aller chercher la bonne question dépend de la valeur en session
if (isset($_SESSION["q"])) {
  echo $questionnaire->loadQuestion($_SESSION["q"]);
} else {
  echo "y a rien"; // mettre la valeur à 1
}

// Je simule la réponse donnée par l'utilisateur
$rep = "Volvor";

// Je compare la réponse donnée par l'utilisateur avec celle du modèle et j'agit en conséquence
if($rep == $questionnaire->loadReponse($_SESSION["q"])) {
  echo "ok c'est bon";
  $_SESSION["q"]++;
  $_SESSION["tentative"]++;
} else {
  echo "c'est faux";
  $_SESSION["tentative"]++;
}

// Exemple pour voir ce qu'il y a dans la session en cours
dump($_SESSION); 


echo "Vous avez essayé " . $_SESSION["tentative"] . " fois";
