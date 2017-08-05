<?php
	$conn = mysqli_connect('127.0.0.1:3306','root','root','oneone');
	$account=$_GET['account'];
	$Password=$_GET['passwd'];
	$realname=$_GET['realname'];
	$sql = "insert into member(account,password,realname)".
			values ('{account}','{password}','{realbname}')
	mysqli_query($conn,$sql);
	if(mysqli_error()){
		echo 'OK';
		return;
	}else{
		echo "error"
		return;
	}




?>