<?php
	include("gen.php");
	$cmd=get_datan("cmd");
	switch($cmd)
	{
		case 1:
			get_devotions();
			break;
		case 2:
			get_today();
			break;
		case 3:
			get_yesterday();
			break;
		case 4:
			get_two_days();
			break;
		case 5:
			get_nextweek_devotions();
		default:
			echo"{";
			echo jsonn("result",0). ",";
			echo jsons("message","unknown command");
			echo "}";
	}

	function get_devotions()
	{
		include("devotional.php");
		$did=get_datan("did");
		$var=new Devotional();
		$var->get_devotions();
		$row=$var->fetch();
		if(!$row)
		{
			echo "{";
			echo jsonn("result",0).",";
			echo jsons("message","devotional not found");
			echo "}";
			return;
		}

		while($row)
		{
			echo "{";
				echo jsonn("result",1).",";
				echo '"devotion":{';
					echo jsonn("did",$did).",";
					echo jsons("title",$row['title']).",";
					echo jsons("date",$row['date']).",";
					echo jsons("verse",$row['verse']).",";
					echo jsons("bible_reading",$row['bible_reading']).",";
					echo jsons("devotional_reading",$row['devotional_reading']).",";
					echo jsons("prayer",$row['prayer']);
				echo "}";
			echo "}";

			$row=$var ->fetch();
		}
		return;
	}

	function get_nextweek_devotions()
	{
		include("devotional.php");
		$did=get_datan("did");
		$var=new Devotional();
		$var->get_nextweek()();
		$row=$var->fetch();
		if(!$row)
		{
			echo "{";
			echo jsonn("result",0).",";
			echo jsons("message","devotional not found");
			echo "}";
			return;
		}

		while($row)
		{
			echo "{";
				echo jsonn("result",1).",";
				echo '"devotion":{';
					echo jsonn("did",$did).",";
					echo jsons("title",$row['title']).",";
					echo jsons("date",$row['date']).",";
					echo jsons("verse",$row['verse']).",";
					echo jsons("bible_reading",$row['bible_reading']).",";
					echo jsons("devotional_reading",$row['devotional_reading']).",";
					echo jsons("prayer",$row['prayer']);
				echo "}";
			echo "}";

			$row=$var ->fetch();
		}
		return;
	}


	function get_today()
	{
		include("devotional.php");
		//$title=get_today("title");
		$did=get_datan("did");
		$var=new Devotional();
		$var->todays_devotion();
		$row=$var->fetch();

		if(!$row)
		{
			echo "{";
			echo jsonn("result",0).",";
			echo jsons("message","devotion unavailable");
			echo "}";
			return;
		}
		echo "{";
			echo jsonn("result",1).",";
			echo '"devotion":{';
				echo jsons("title",$row['title']).",";
				echo jsons("date",$row['date']).",";
				echo jsons("verse",$row['verse']).",";
				echo jsons("bible_reading",$row['bible_reading']).",";
				echo jsons("devotional_reading",$row['devotional_reading']).",";
				echo jsons("prayer",$row['prayer']);
			echo "}";
		echo "}";
	}

	function get_yesterday()
	{
		include("devotional.php");
		//$title=get_yesterday("title");
		$did=get_datan("did");
		$var=new Devotional();
		$var->yesterdays_devotion();
		$row=$var->fetch();

		if(!$row)
		{
			echo "{";
			echo jsonn("result",0).",";
			echo jsons("message","devotion unavailable");
			echo "}";
			return;
		}
		echo "{";
			echo jsonn("result",1).",";
			echo '"devotion":{';
				echo jsons("title",$row['title']).",";
				echo jsons("date",$row['date']).",";
				echo jsons("verse",$row['verse']).",";
				echo jsons("bible_reading",$row['bible_reading']).",";
				echo jsons("devotional_reading",$row['devotional_reading']).",";
				echo jsons("prayer",$row['prayer']);
			echo "}";
		echo "}";
	}

	function get_two_days()
	{
		include("devotional.php");
		//$title=get_two_days("title");
		$did=get_datan("did");
		$var=new Devotional();
		$var->twodays_devotion();
		$row=$var->fetch();

		if(!$row)
		{
			echo "{";
			echo jsonn("result",0).",";
			echo jsons("message","devotion unavailable");
			echo "}";
			return;
		}
		echo "{";
			echo jsonn("result",1).",";
			echo '"devotion":{';
				echo jsons("title",$row['title']).",";
				echo jsons("date",$row['date']).",";
				echo jsons("verse",$row['verse']).",";
				echo jsons("bible_reading",$row['bible_reading']).",";
				echo jsons("devotional_reading",$row['devotional_reading']).",";
				echo jsons("prayer",$row['prayer']);
			echo "}";
		echo "}";
	}

?>