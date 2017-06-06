<?php
$map = $bdd->prepare('SELECT * FROM golf WHERE title = :title');

$map->execute(array(
  'title' => $title
));


$mapResult = $map->fetch();
