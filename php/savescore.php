<?php
	$uid = $_REQUEST['uid'];
	$score = $_REQUEST['score'];

	$link = mysqli_connect('127.0.0.1','root','','HDH');
	mysqli_query($link,'SET NAMES utf8');
	$query = "insert into scores(id,score) values('$uid','$score')";
	$result = mysqli_query($link,$query);
	$result_count = mysqli_affected_rows($link);
	if($result_count > 0)
	{
		echo 'OK';
	}
	else{
		echo 'ERROR';
	}
?>