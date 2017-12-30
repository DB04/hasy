<div class="row">
<div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">
                        ĐƠN HÀNG ĐANG XỬ LÝ
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
$page = addslashes($_GET['page_xuly']) * 5;
  if($page > 0){
      $page = $page - 1;
  }
$data = $mysql->where('status', 3)->order_by('id','ASC')->limit($page.', 5')->get('donhang');
$all = $mysql->num_rows().'<br />';
for($i=0;$i<$all;$i++){
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
                               <?php echo $data[$i]['numberphone']; ?>
                              </td>
                              
                              <td class="text-right">
                                -
                              </td>
                              <td class="text-right">
                                <?php echo $data[$i]['price'] * $data[$i]['quantity']; ?>
                              </td>
                             <?php if($permision==1){
                                ?>
                              <td class="text-right">
                                <button class="btn btn-info" type="submit">GỌI XƯỞNG</button>
                              </td>
                              <?php }elseif ($permision==2) { ?>
                               <td class="text-right">
                                <button class="btn btn-success" type="submit"> XUẤT KHO</button>
                              </td>
                              <?php } else {
                                #null
                              } ?>
                              
                            </tr>
                           <?PHP } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>


                     <div class="controls-below-table">
                        <div class="table-records-info">
                          Tổng
                          <?php 
$order = $mysql->where('status', 3)->get('donhang');
$all = $mysql->num_rows(); 
$trang = floor($all/5+1);
echo $all.' đơn';
?>                        </div>
                        <div class="table-records-pages">
                          <ul>
                            <li>
                              Trang: 
                            </li>

<?php for($i=1;$i<$trang+1;$i++){ ?>

                            <li>
                              <a href="<?php echo link;?>&page_xuly=<?php echo $i-1; ?>"><?php echo $i ?></a>
                            </li>
<?php } ?>

                          </ul>
                        </div>
                      </div>



                  </div>
                </div>
            </div>