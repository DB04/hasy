<?php
/*****************
* HAI ANH GROUP
* DATA SYSTEM
* FUNCTION
* CODE BY DB04-BYG
******************/
include('msql.php');
$mysql = new MySQL('localhost', 'system', 'system', 'system');
// This function get PERMISION text to mysql
function permision($number){
	$permision  = array(
					null,
					'SALE',
					'NHÂN VIÊN XƯỞNG',
					'KẾ TOÁN'
					);
	ECHO $permision[$number];
}
// This function get order status text to mysql
function order_status($number){
	$order_status = array(
						'ĐẶT HÀNG',
						'ĐÃ LIÊN LẠC',
						'ĐÃ CHỐT',
						'ĐANG XỬ LÝ',
						'XUẤT KHO',
						'GIAO HÀNG',
						'HOÀN THÀNH',
						'THẤT BẠI',
						'ĐƠN BỊ HOÀN'
						);
	ECHO $order_status[$number];
}
//This fuction get place to myssql			
function place($number){
	$ds = "An Giang, Bà Rịa-Vũng Tàu, Bạc Liêu, Bắc Kạn, Bắc Giang, Bắc Ninh, Bến Tre, Bình Dương, Bình Định, Bình Phước, Bình Thuận, Cà Mau, Cao Bằng, Cần Thơ*, Đà Nẵng*, Đắk Lắk, Đăk Nông, Điện Biên, Đồng Nai, Đồng Tháp, Gia Lai, Hà Giang, Hà Nam, Hà Nội*, Hà Tĩnh, Hải Dương, Hải Phòng*, Hậu Giang, Hòa Bình, Thành phố Hồ Chí Minh*, Hưng Yên, Khánh Hòa, Kiên Giang, Kon Tum, Lai Châu, Lâm Đồng, Lạng Sơn, Lào Cai, Long An, Nam Định, Nghệ An, Ninh Bình, Ninh Thuận, Phú Thọ, Phú Yên, Quảng Bình, Quảng Nam, Quảng Ngãi, Quảng Ninh, Quảng Trị, Sóc Trăng, Sơn La, Tây Ninh, Thái Bình, Thái Nguyên, Thanh Hóa, Thừa Thiên-Huế, Tiền Giang, Trà Vinh, Tuyên Quang, Vĩnh Long, Vĩnh Phúc, Yên Bái";
	$ds = explode(',', $ds);
	echo $ds[$number];
}


function custom_status($number){
	$custom_status = array(	'ĐÃ ĐẶT HÀNG',
							'ĐÃ MUA HÀNG',
							'HỦY ĐƠN HÀNG'
							);
	ECHO $custom_status($number);
}


function source($number){
	$source = array(	null,
							'FACEBOOK',
							'GOOGLE'
							);
	ECHO $source($number);
}

function Random($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function get_name_sale($var){
 global $mysql;
	$name = $mysql->where('id', $var)->get('employer');
	return $name[0]['employer'];

}


?>