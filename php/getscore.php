<?php
	$link = mysqli_connect('127.0.0.1','root','','HDH');
	mysqli_query($link,'SET NAMES utf8');
	$query = 'select nickname,score from users inner join scores on users.num=scores.id order by score desc limit 0,10';
	$result = mysqli_query($link,$query);
	$usersArray  = array();
	while($row = mysqli_fetch_row($result))
	{
		// echo 'OK';
		$user = array('nickname'=>$row[0],'score'=>$row[1]);
		array_push($usersArray,$user);
	}
	echo json_encode($usersArray);
?>