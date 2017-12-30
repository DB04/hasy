<?php
/***********************************************
* @ DEVELOPER BY DB04
* @ HAI ANH GROUP
*
*
*
*
***********************************************/
include_once('../haconfig/config.php');
include_once('../haclass/func.php');
session_start();
$redriect = base64_decode($_GET['redirect']);
if(isset($_GET['nhandon'])){
	# ID session nhận đơn
	$madon = addslashes($_GET['nhandon']);
	try{
		$mysql->where('id', $madon)->update('donhang', array('status' => 1, 'sale' => 1));
		header('Location: '.$redriect);
	}catch(Exception $e){
		echo 'Caught exception: ', $e->getMessage();
	}
}

if(isset($_GET['chot'])){
	# ID session nhận đơn
	$madon = addslashes($_GET['chot']);
	try{
		$mysql->where('id', $madon)->update('donhang', array('status' => 2));
		header('Location: '.$redriect);
	}catch(Exception $e){
		echo 'Caught exception: ', $e->getMessage();
	}
}

if(isset($_GET['huy'])){
	# ID session nhận đơn
	$madon = addslashes($_GET['huy']);
	try{
		$mysql->where('id', $madon)->update('donhang', array('status' => 7));
		header('Location: '.$redriect);
	}catch(Exception $e){
		echo 'Caught exception: ', $e->getMessage();
	}
}

	
/***********************************************
* @ DEVELOPER BY DB04
* @ HAI ANH GROUP
*
*
*
*
***********************************************/

