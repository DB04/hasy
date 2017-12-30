<?php
error_reporting(0);
session_start();
define(id, $_SESSION['id']);
define(username, $_SESSION['name']);
define(permision, $_SESSION['permision']);
define(code, $_SESSION['code']);
if (id === null){
	include_once('auth.php');
} else {

		include_once('header.php');
		include_once('haconfig/config.php');
		include_once('haclass/func.php');
		switch ($_GET['home']) {
			case 'khach-hang':
				include_once('haclient/custom.php');
				break;
			case 'don-hang':
				include_once('haclient/order.php');
				break;
			case 'nhan-vien':
				include_once('haclient/empoly.php');
				break;
			case 'admin':
				include_once('haclient/admin.php');
				break;
			case 'order-creat':
				include_once('haclient/order/creat.php');
				break;
			case 'order-chitiet':
				include_once('haclient/factory.php');
				break;
			case 'order':
				include_once('haclient/factory.php');
				break;
			case 'lan':
				include_once('haclient/filemanager.php?p=');
				break;
			default:

				include_once('haclient/home_admin.php');
				break;
	}
			


	include_once('footer.php');
}
?>