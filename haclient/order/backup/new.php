
<div class="row">
	<div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">
                      	ĐƠN HÀNG MỚI
                    </h6>
                    <div class="element-box">
                      <div class="table-responsive">
                        <table class="table table-lightborder">
                          <thead>
                          	
                          	
                            <tr>
                            <th>
                                # CODE
                              </th>
                              <th>
                                KHÁCH HÀNG
                              </th>
                              <th>
                                SẢN PHẨM
                              </th><th>
                                SỐ LƯỢNG
                              </th>
                              <th class="text-center">
                                ĐỊA CHỈ
                              </th>
                              <th class="text-right">
                                SĐT
                              </th>
                                                            <th class="text-right">
                                NGƯỜI TIẾP NHẬN
                              </th>
                              <th class="text-right">
                                THÀNH TIỀN
                              </th>
                              <th class="text-right">
                                HÀNH ĐỘNG
                              </th>
                            </tr>
                          </thead>
                          <tbody>
<?PHP 
$page = addslashes($_GET['page_new']) * 5;
  if($page > 0){
      $page = $page;
  }
$data = $mysql->pagging('donhang','status = 0', $page.', 5');
$num_rows = $data['row'];
for($i=0;$i<$num_rows;$i++){
?>
                            <tr>
                            	<td class="nowrap">
                                #HA-<?php echo $data[$i]['id']; ?>
                              </td>
                              <td class="nowrap">
                                <?php echo $data[$i]['name']; ?>
                              </td>
                              <td>
                                <div class="cell-image-list">
                                  <div class="cell-img" style="background-image: url(<?php echo img; ?>/portfolio9.jpg)"></div>
                                  <div class="cell-img" style="background-image: url(<?php echo img; ?>/portfolio10.jpg)"></div>
                                  <div class="cell-img" style="background-image: url(<?php echo img; ?>/portfolio11.jpg)"></div>
                                  <div class="cell-img" style="background-image: url(<?php echo img; ?>/portfolio12.jpg)"></div>
                                  <div class="cell-img" style="background-image: url(<?php echo img; ?>/portfolio13.jpg)"></div>
                                  <div class="cell-img" style="background-image: url(<?php echo img; ?>/portfolio14.jpg)"></div>
                                </div>
                              </td>
                              <td class="text-center">
                                <?php echo $data[$i]['quantity']; ?>
                              </td><td class="text-center">
                               <?php echo $data[$i]['addrress']; ?>
                              </td>
                              <td class="text-center">
                               0<?php echo $data[$i]['numberphone']; ?>
                              </td>
                              
                              <td class="text-right">
                                -
                              </td>
                              <td class="text-right">
                                <?php echo $data[$i]['price'] * $data[$i]['quantity']; ?>
                              </td>
                                   <td class="text-right"><a href="http://127.0.0.1/haaction/seller_act.php?nhandon=<?php echo $data[$i]['id']; ?>&redirect=<?php echo base64_encode(link); ?>">
                                <button class="btn btn-danger" type="submit"> NHẬN ĐƠN</button>
                              </a>
                              </td>
                            </tr>
<?PHP } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>


                     <div class="controls-below-table">
                        <div class="table-records-info">
                          Tổng: 
<?php 
$order = $mysql->where('status', 0)->get('donhang');
$all = $mysql->num_rows(); 
$trang = floor($all/5);
echo $all.' đơn';
?>                        </div>
                        <div class="table-records-pages">
                          <ul>
                            <li>
                              Trang: 
                            </li>
<?php for($i=1;$i<$trang+1;$i++){ ?>

                            <li>
                              <a href="<?php echo link;?>&page_new=<?php echo $i-1; ?>"><?php echo $i ?></a>
                            </li>
<?php } ?>

                          </ul>
                        </div>
                      </div>



                  </div>
                </div>
            </div>