<?php
session_start();
if($_SESSION['login']=='success'){
	$messageId=$_GET['messageId'];
	$admin=$_GET['adminName'];
	include("conn.php");
	$flag=mysql_query("delete from message where messageId=$messageId");	
	if($flag){
		header("location:index.php?adminName=$admin");	
	}else{
		echo '<script>alert("删除失败，请联系高级管理员");location.href="index.php";</script>';	
	}
}else{
	header("location:error.php");	
}



?>