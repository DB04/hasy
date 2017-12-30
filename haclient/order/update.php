<?php
error_reporting(0);
session_start();
if($_SESSION['permision'] != 2){
	echo x;
	exit;
}
include('../../haclass/func.php');
if($_POST['xong'] != null && $_POST['code'] != null && $_POST['columns'] != null){
	$action = addslashes($_POST['xong']);
	$id = addslashes($_POST['code']);
	$columns = addslashes($_POST['columns']);

	try{
		$mysql->where('id', $id)->update('donhang', array($columns => $action));
		echo 1;
	}catch(Exception $e){
		echo 0;
	}
} else {
	echo 0;
}