<?php
session_start();

header("Content-type:application/json");

if (isset($_SESSION['admin'])) {
    echo json_encode(['response' => true]);
} else {
    echo json_encode(['response' => false]);
}
