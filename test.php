<?php
include_once('haconfig/config.php');
#include_once('haclass/msql.php');
include_once('haclass/func.php');
#$mysql = new MySQL('localhost', 'system', 'system', 'system');
		$post = $mysql->where('price', 10000)->where('sale', 2)->get('donhang');
		#echo count($post);
		#print_r($post[0]);
		for($i=0;$i<count($post);$i++){
			#print_r($post[$i]['id']);
			
		}
#Tồng doanh thu
$total = $mysql->sum("donhang","price");
echo $total[0]['tong'].'<br />';






# Đếm đơn hàng tổng số:
$order_total = $mysql->get('donhang');
echo $mysql->num_rows().'<br />';

# Đếm đơn hàng đã đặt

$order_0 = $mysql->where('status', 0)->get('donhang');
echo $mysql->num_rows().'<br />';

# Đếm đơn hàng đã liên lạc

$order_1 = $mysql->where('status', 1)->get('donhang');
echo $mysql->num_rows().'<br />';


# Đếm đơn hàng đã chốt

$order_2 = $mysql->where('status', 2)->get('donhang');
echo $mysql->num_rows().'<br />';

# Đếm đơn hàng đang xử lý

$order_3 = $mysql->where('status', 3)->get('donhang');
echo $mysql->num_rows().'<br />';

# Đếm đơn hàng đã xuất kho

$order_4 = $mysql->where('status', 4)->get('donhang');
echo $mysql->num_rows().'<br />';

# Đếm đơn hàng đã giao hàng

$order_5 = $mysql->where('status', 5)->get('donhang');
echo $mysql->num_rows().'<br />';


# Đếm đơn hàng đã hoàn thành

$order_6 = $mysql->where('status', 6)->get('donhang');
echo $mysql->num_rows().'<br />';

# Đếm đơn hàng đã thất bại

$order_7 = $mysql->where('status', 7)->get('donhang');
echo $mysql->num_rows().'<br />';

# Đếm đơn hàng bị hoàn

$order_8 = $mysql->where('status', 8)->get('donhang');
echo $mysql->num_rows().'<br />';







# Đếm khách hàng

$custom = $mysql->get('custom');
echo $mysql->num_rows().'<br />';

# Đếm khách hàng đã đặt hàng
$custom_order = $mysql->where('status', 0)->get('custom');
echo $mysql->num_rows().'<br />';

# Đếm khách hàng đã mua
$custom_buy = $mysql->where('status', 1)->get('custom');
echo $mysql->num_rows().'<br />';


# Đếm khách hàng đã hủy đơn
$custom_cancell = $mysql->where('status', 2)->get('custom');
echo $mysql->num_rows().'<br />';


#ĐẾM NGUỒN KHÁCH HÀNG
#FACEBOOK
$custom_fb = $mysql->where('source', 1)->get('custom');
echo $mysql->num_rows().'<br />';
#GOOGLE
$custom_gl = $mysql->where('source', 2)->get('custom');
echo $mysql->num_rows().'<br />';
#KHÁC
$custom_or = $mysql->where('source', null)->get('custom');
echo $mysql->num_rows().'<br />';


#THỐNG KÊ NHÂN VIÊN
#TỔNG
$employer = $mysql->get('employer');
echo $mysql->num_rows().'<br />';

#SALE
$employer_1 = $mysql->where('permision', 1)->get('employer');
echo $mysql->num_rows().'<br />';
#Xưởng
$employer_2 = $mysql->where('permision', 2)->get('employer');
echo $mysql->num_rows().'<br />';
#KẾ TOÁN
$employer_3 = $mysql->where('permision', 3)->get('employer');
echo $mysql->num_rows().'<br />';


function random_num($length = 1) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

for($i=1;$i<87;$i++){
	try{
			$mysql->where('id', $i)->update('donhang', array('place' => random_num(1)));
		}catch(Exception $e){
			echo 'Caught exception: ', $e->getMessage();
		}
	}



$data = $mysql->pagging('donhang','status = 1 AND sale = 1','10, 5');
var_dump($data);
echo $mysql->num_rows();