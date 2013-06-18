<?php
//use po\MyPoA,
//    po\MyPoB;
require_once("doctrine.php");

$eee = $em->createQuery('SELECT u FROM po\MyPoB u');
$users = $eee->getArrayResult();
echo "<br />";
print_r($users);
//var_dump($eee->getSQL());



