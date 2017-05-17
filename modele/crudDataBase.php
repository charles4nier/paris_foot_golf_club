<?php
require 'dbaccess.php';

function uploadImg ($name, $size, $type, $content) {
  $req = $bdd->prepare('INSERT INTO upload(name, size, type, content) VALUES(:name, :size, :type, :content)');
  $req->execute(array(
    'name' => $name,
    'size' => $size,
    'type' => $type,
    'content' => $content
    ));
  echo "upload effectué";
}
