<?php
	include_once("adb.php");

	class Devotional extends adb
	{
		function Devotional()
		{
			adb::adb();
		}

		/*
		function add_devotional($title, $date, $verse, $bible_reading, $devotional_read, $prayer)
		{

		}
		*/

		function get_devotions()
		{
			$query = "SELECT title, date, verse, bible_reading, devotional_reading,
			prayer from devotion";
			return $this -> query($query);
		}

		function todays_devotion()
		{
			$query = "SELECT title, date, verse, bible_reading, devotional_reading, 
			prayer from devotion where date = CURDATE()";
			return $this -> query($query);
		}

		function yesterdays_devotion()
		{
			$query = "SELECT title, date, verse, bible_reading, devotional_reading, 
			prayer from devotion where date = SUBDATE(CURDATE(),1)";
			return $this -> query($query);
		}

		function twodays_devotion()
		{
			$query = "SELECT title, date, verse, bible_reading, devotional_reading, 
			prayer from devotion where date  = SUBDATE(CURDATE(),2)";
			return $this -> query($query);
		}
		/*
		function add_to_bookmark($title)
		{
			$query = "";
			return $this -> query($query);
		}

		function delete_from_bookmark($title)
		{
			$query = "";
			return $this -> query($query);
		}
		*/
	}
?>