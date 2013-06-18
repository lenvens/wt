<form action="" method="POST">
<input type="text" name="words"> </input>
<input type="submit" name="search_begin" value="搜索"> </input>
</form>
<?php

if($_POST['search_begin'])
{

	$words=$_POST['words'];
	print_r(explode("|",$words));
	$s = new SphinxClient;
	$s->setServer("localhost", 9312) ;
	$s->setMatchMode(SPH_MATCH_ANY);
	$s->setLimits(1,1000,1000);
	$s->setMaxQueryTime(1000);
	$index = "test1";
	$opts = array
		(
			"before_match"		=> "<b><font color=red>",
			"after_match"		=> "</b></font>",
			"chunk_separator"	=> " ... ",
			"limit"				=> 60,
			"around"			=> 3,
		);
	$result = $s->query($words,$index);
	$num=count($result['matches']);
	$con=pg_connect("host=localhost dbname=db user=postgres port=5432 password=123456");
	$arr=array();
	$arr1=array();
	foreach((array)$result['matches'] as $key=>$value)
	{
		$res=pg_query("select sku,marketing_title from cs where id=$key");
		if(pg_num_rows($res)>0)
		{
			$obj=pg_fetch_array($res);
			$doc=$obj['marketing_title'];
			array_push($arr,$obj['marketing_title']);
			array_push($arr1,$obj['sku']);
		}

	}
	if(count($arr)>0)
	{
		$res = $s->BuildExcerpts ($arr, $index, $words, $opts );
	}
	$n = 0;
	foreach ((array)$res as $entry )
	{
		$n++;
		print_r("<pre>");
		print "$entry\n".$arr1[$n];
		print_r("</pre>");
	}

}
?>
