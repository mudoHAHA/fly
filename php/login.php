<?php
	$loginName = $_REQUEST['txtLoginName'];
	$loginPwd = $_REQUEST['txtLoginPwd'];

	$link = mysqli_connect('127.0.0.1','root','','HDH');
	mysqli_query($link,'SET NAMES utf8');
	$query = "select * from users where loginname='$loginName' and loginPwd = '$loginPwd'";
	$result = mysqli_query($link,$query);
	if($result)
	{
		$result_count = mysqli_num_rows($result);
		if($result_count > 0)
		{
			if($row = mysqli_fetch_row($result)){
				$uid = $row[0];
				$nickName = $row[3];
				$jsonArray = array('uid'=>$uid,'nickname'=>$nickName);
				echo json_encode($jsonArray);
			}
		}
		else
		{
			echo 'ERROR';
		}
	}
	else
	{
		echo 'SEVER_ERROR';
	}
?>