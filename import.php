<?php
error_reporting(0);
include_once('func.php');
include_once('haclass/msql.php');
include_once('haconfig/config.php');
	$mysql = new MySQL('localhost', 'hasystem', 'tyjFRor05mk1fGvZ', 'hasystem');	

if($_POST['name'] != NULL && $_POST['addrress'] != NULL && $_POST['place'] != NULL && $_POST['numberphone'] != NULL && $_POST['price'] >= 10000 && $_POST['quantity'] != NULL){

		$mkh = $_POST['mkh'];
		$name = $_POST['name'];
		$addrress = $_POST['addrress'];
		$place = $_POST['place'];
		$numberphone = $_POST['numberphone'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$status = $_POST['status'];
		$date  = $_POST['date'];
		try{
				$mysql->insert('donhang', array('mkh' => $mkh, 'name' => $name, 'addrress' => $addrress, 'numberphone' => $numberphone, 'product' => 'ao', 'price' => $price, 'quantity' => $quantity, 'status' => 0,'date' => hadate, 'place' => $place));
				echo $mysql->insert_id(); // id of newly inserted post
			}catch(Exception $e){
				echo 'Caught exception: ', $e->getMessage();

			}
} else {
?>

<form action="#" method="post">
	<!-- <input type="text" name="mkh" required /><br /> -->
	Tên
	<input type="text" name="name" required /><br />
	Địa chỉ:
	<input type="text" name="addrress" required /><br />
	Tỉnh:
	<input type="number" name="place" required /><br />
	Số điện thoại:
	<input type="number" name="numberphone" required /><br />
	Giá:
	<input type="number" name="price" value="99000" required /><br />
	Số lượng:
	<input type="option" name="quantity" required /><br />
	<input type="submit" name="submit">
	
</form>

<?php
}