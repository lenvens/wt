<?php

use po\MyPoA,
    po\MyPoB;

require_once 'doctrine.php';
$login=$_POST['login'];
$pwd=$_POST['pwd'];
$sbt=$_POST['sbt'];
if(isset($sbt))
{


	$eee = $em->createQuery('SELECT u FROM po\MyPoA u where u.name=\''.$login.'\' and u.password=\''.$pwd.'\'');
	$users = $eee->getArrayResult();
	var_dump($users);
	if($users)
	{
		echo "xxxdfd";
	
	}
	else
	{
		echo "dfdfdfd";
	
	}
	//$a=new MyPoA;
	//$a->setMyPoAName('weitao');

	//$b=new MyPoB;
	//$b->setMyPoBNick('weitao');
	//$b->setMyPoAbid($a);
	//$em->persist($a);
	//$em->persist($b);
	//$em->flush();
}
?>
<form method="post" action="<?=$PHP_SELF?>">
<p>name:<input type="text" name="login" /></p>
<p>pawd:<input type="password" name="pwd" /></p>
<p><input name="sbt" type="submit" value="submit" /></p>
</form>
