<?php

$pdo = new PDO("mysql:host=localhost;dbname=wikies", "root", "");

$categories = $pdo->query('SELECT * FROM categorie')->fetchAll();

?>