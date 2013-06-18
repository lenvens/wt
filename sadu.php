<?php
use po\MyPoA,
    po\MyPoB;

require_once 'doctrine.php';
$a=new MyPoA;
$a->setMyPoAName('weitao');
$a->setMyPoAPassword('123422');

$b=new MyPoB;
$b->setMyPoBNick('weitao');
$b->setMyPoAbid($a);
$em->persist($a);
$em->persist($b);
$em->flush();
