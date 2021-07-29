<?php
include_once 'messages.php';
$db = new PDO('mysql:host=localhost;dbname=lims', 'root', '');
$db->exec("SET NAMES UTF8");
$id =  htmlspecialchars($_GET['id']);
delete($db, $id);