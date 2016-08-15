<?php
	$loginName = $_REQUEST['loginName'];
	$loginPwd = $_REQUEST['loginPwd'];
	$nickName = $_REQUEST['nickName'];

	$link = mysqli_connect('127.0.0.1','root','','HDH');
	mysqli_query($link,'SET NAMES utf8');
	$query = "insert into users(loginname,loginpwd,nickname) values('$loginName','$loginPwd','$nickName')";
	$result = mysqli_query($link,$query);
	$result_count = mysqli_affected_rows($link);

	if($result_count > 0)
	{
		$uid = mysqli_insert_id($link);
		$jsonArray = array('uid'=>$uid,'nickname'=>$nickName);
		echo json_encode($jsonArray);
	}else{
		echo 'ERROR';
	}
?>