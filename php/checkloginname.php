<?php
	$loginName = $_REQUEST['loginName'];
	$link = mysqli_connect('localhost','root','','HDH');
	mysqli_query($link,'SET NAMES utf8');
	$query = "select * from users where loginname='$loginName'";
	$result = mysqli_query($link,$query);
	if($result){
		$result_count = mysqli_num_rows($result);
		if($result_count > 0)
		{
			echo 'EXISTS';
		}else{
			echo 'NOTEXISTS';
		}
	}
	else{
		echo 'SERVER_ERROR';
	}
?>