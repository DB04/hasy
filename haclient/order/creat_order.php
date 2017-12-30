<?php
session_start();
include('../../haclass/func.php');
include('../../haconfig/config.php');
$permision = $_SESSION['id'];
if($permision == 2){
	$post_data = array();
	foreach($_POST as $key => $value) {
		$post_data[$key] = $value;
	  if($value == null){
	  	echo 0;
	  	exit;  
	  }

	}
	
	if(strlen($post_data['sodienthoai']) < 10){
		echo 1;
		exit; #số điện thoại nhỏ hơn 10 kí tự
	}

	if($post_data['xs'] < 0 && $post_data['s'] < 0 && $post_data['m'] < 0 && $post_data['l'] < 0 && $post_data['xl'] < 0 && $post_data['xxl'] < 0 && $post_data['xxxl'] < 0){
		echo 2; # không được âm 
		exit;
	}

	$soluong_m = $post_data['xs'] + $post_data['s'] + $post_data['m'] + $post_data['l'] + $post_data['xl'] + $post_data['xxl'] + $post_data['xxxl'];
	$soluong = $post_data['soluong'];

	if($soluong != $soluong_m){
		echo 3; #Tổng số lượng size không bằng tổng số lượng áo
		exit;
	}


	$pay = $soluong * $post_data['dongia'];
	if($post_data['dacoc'] > $pay){
		echo 5; # Tiền cọc lớn hơn tổng số tiền
		exit;
	}



	try{
		$mysql->insert('donhang', array(
			'mkh' => $post_data['khachhang'], 
			'product' => $post_data['product'], 
			'name' => $post_data['tenkhachhang'], 
			'addrress' => $post_data['diachi'], 
			'place' => $post_data['tinh'], 
			'city' => $post_data['huyen'],
			'phone' => $post_data['sodienthoai'],
			'quantity' => $post_data['soluong'],
			'price' => $post_data['dongia'],
			'sale' => $_SESSION['id'],
			'order_date' => hadate,
			'exp_date' => $post_data['exp_date'],
			'pay' => $pay,
			'info' => $post_data['ghichudh'],
			'link_fb' => $post_data['linkfb'],
			'chat_lieu' => $post_data['chatlieuvai'],
			'kieu_dang' => $post_data['kieudang'],
			'xs' => $post_data['xs'],
			's' => $post_data['s'],
			'm' => $post_data['m'],
			'l' => $post_data['l'],
			'xl' => $post_data['xl'],
			'xxl' => $post_data['xxl'],
			'xxxl' => $post_data['xxxl'],
			'chiet_khau' => $post_data['chietkhau'],
			'da_coc' => $post_data['dacoc'],
			'hinh_thuc' => $post_data['hinhthucvc'],
			'hinh_thucck' => $post_data['hinhthucck'],
			'ghi_chu_tt' => $post_data['ghichutt']
		));
		echo $mysql->insert_id(); // id of newly inserted post
	}catch(Exception $e){
		echo '99';
	}
} else {
	echo '404 Not Page Found';
}
