<?php 
//データベースに接続
	$dsn='mysql:dbname=seed_sns;host=192.168.33.10';
	$user='vagrant';
	$password='vagrant';
	$dbh=new PDO($dsn,$user,$password);
	$dbh->query('SET NAMES utf8');

 ?>