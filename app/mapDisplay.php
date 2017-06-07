<?php
session_start();

$title = "";

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    require_once('../modele/db_access.php');
    require_once('../modele/mapReq.php');

    if ($mapResult) {
      $_SESSION['source'] = $mapResult['source'];
    }
}
