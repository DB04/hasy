<div class="row">
        <div class="example-box-wrapper">
            <div class="scroll-columns">
                <table class="table table-bordered table-striped table-condensed cf">
                    <thead class="cf">
                    <tr>
                         <th>#Mã</th>
                            <th>Loại</th>
                            <th>.Mock</th>
                            <th>.SIZE</th>
                            <th>Tên KH</th>
                            <th>Sale</th>
                            <th>.Or</th>
                            <th>EXP</th>
                            <th>Ưu Tiên</th>
                            <th>#Kiểm Định</th>
                            <th>E</th>
                            <th>V</th>
                    </tr>
                    </thead>
                    <tbody>
<?PHP 
$page = addslashes($_GET['page_kiemdinh']) * 20;
  if($page > 0){
      $page = $page;
  }
$data = $mysql->pagging('donhang','`6` = 1 AND `7` = 0', $page.', 20');
$num_rows = $data['row'];
for($i=0;$i<$num_rows;$i++){
?>
                    <tr class="tr-<?php echo $data[$i]['id']; ?>">
                        <td>#HA-<?php echo $data[$i]['id']; ?></td>
                        <td class="numeric"><b>
                            <?php 
                            $loai = $data[$i]['product']; 
                                if($loai == 1){
                                    echo '<span class="bs-badge badge-purple">AG</span>';
                                }elseif($loai == 2){
                                    echo '<span class="bs-badge badge-info">2D</span>';
                                }elseif($loai == 3){
                                    echo '<span class="bs-badge badge-yellow">3D</span>';
                                }
                            ?>
                            
                        </b></td>
                        <td><i class="glyph-icon icon-save"></i></td>
                        <td><?php echo $data[$i]['size']; ?></td>
                        <td><?php echo $data[$i]['name']; ?></td>
                        <td><?php echo get_name_sale($data[$i]['sale']); ?></td>
                        <td><?php echo $data[$i]['order_date']; ?></td>
                        <td><?php echo $data[$i]['exp_date']; ?></td>
                        <td> 
                              <?php 
                            $loai = $data[$i]['status']; 
                                if($loai == 1){
                                    echo '<span class="bs-badge badge-info">B</span>';
                                }elseif($loai == 2){
                                    echo '<span class="bs-label label-warning">A</span>';
                                }elseif($loai == 3){
                                    echo '<span class="bs-badge badge-danger">S</span>';
                                }elseif($loai == 0){
                                    echo '<span class="bs-badge badge-success">N</span>';
                                }
                            ?>
                            

                        </td>
                         <td class="numeric"><i class="glyph-icon icon-spin-5"></i></td>
                        <td><a href="#edit" data-id="<?php echo $data[$i]['id']; ?>-7" data-toggle="modal" data-target="#edit-modal-data" class="opacity-dialog-80" id="data-modal-edit"><i class="glyph-icon icon-legal"></i></a></td>
                        <td><a href="#thongtin" data-id="<?php echo $data[$i]['id']; ?>-7" data-toggle="modal" data-target="#view-modal" class="opacity-dialog-60" id="data-modal-ok"><i class="glyph-icon icon-eye"></i></a></td>
                    </tr>
                        <?php } ?>
                    
                    </tbody>
                </table>
            </div>
        </div>
</div>


<?php 
$order = $mysql->where('6', 1)->where('7', 0)->get('donhang');
$all = $mysql->num_rows(); 
$trang = floor($all/20+1);
$link = explode(link, '&');
$link = $link[0];
?>   
<div class="row">             
<div class="col-sm-6"><div class="dataTables_info" id="datatable-hide-columns_info" role="status" aria-live="polite">Tổng: <?php echo $all; ?></div></div>
<div class="col-sm-6">
    <div class="dataTables_paginate paging_bootstrap" id="datatable-example_paginate">
        <ul class="pagination">

            <?php for($i=0;$i<$trang;$i++){ ?>
            <li class="">
                <a href="<?php echo link;?>&page_kiemdinh=<?php echo $i; ?>"><?php echo $i+1; ?></a>
            </li>
<?php } ?>
        </ul>
    </div></div>

</div>