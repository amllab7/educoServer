<?php

session_start();

require 'bdd.php';
require 'BddClass.php';

$bddManager = new BddManager($connexion);

$allDATA = $bddManager->getDATA();
$thefunctionNameToExecute = $allDATA['functionExec'];
$bddManager->$thefunctionNameToExecute();



