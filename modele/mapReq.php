<?php
$map = $bdd->prepare('SELECT * FROM golf WHERE name = :name');

$map->execute(array(
  'name' => $title));


$mapResult = $map->fetch();
