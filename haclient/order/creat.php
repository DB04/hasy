

<!-- Parsley -->



<div id="page-title">
    <h2>Tạo Đơn Hàng</h2>
    <p>Đừng nhầm lẫn gì nhé ;)</p>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">

        </h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="creat_order_form" action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mã Đơn:</label>
                            <div class="col-sm-6">
                                <input type="text" name="madon" value="#HA-54654" disabled class="form-control"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>

                        <div class="form-group">
                    <label class="col-sm-3 control-label">Khánh Hàng:</label>
                    <div class="col-sm-6">
                        <label class="radio-inline">
                            <input type="radio" id="" name="khachhang" required value="1">
                            Học Sinh
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="" name="khachhang" required value="2">
                            Doanh Nghiệp
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="" name="khachhang" required value="3">
                            Bán Lẻ
                        </label>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-3 control-label">Loại áo:</label>
                    <div class="col-sm-6">
                        <label class="radio-inline">
                            <input type="radio" id="" name="product" required value="1">
                            2D
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="" name="product" required value="2">
                            3D
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="" name="product" required value="3">
                            AG
                        </label>
                    </div>
                </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tên KH:</label>
                            <div class="col-sm-6">
                                <input type="text" name="tenkhachhang" placeholder="Nhập Tên Khách Hàng" required="" class="form-control"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>


                        


                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Ngày Trả Hàng:</label>
                            <div class="col-sm-6">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="date" name="exp_date" class="bootstrap-datepicker form-control" value="<?php echo hadate;?>" data-date-format="mm-dd-yy">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Số Điện Thoại:</label>
                            <div class="col-sm-6">
                                <input type="number" name="sodienthoai"  data-parsley-minlength="10" data-parsley-type="alphanum" placeholder="Nhập số điện thoại khách hàng" required="" class="form-control" ><ul class="parsley-errors-list" id="parsley-id-7733"></ul>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Link Facebook/Zalo/Google</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-type="url" name="linkfb" placeholder="https://www.facebook.com/db04.byg" class="form-control"><ul class="parsley-errors-list" id="parsley-id-0565"></ul>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Số Lượng Áo</label>
                            <div class="col-sm-6">
                                <input type="number" name="soluong" data-parsley-minlength="1" data-parsley-type="alphanum" value="0" required="" class="form-control"><ul class="parsley-errors-list" id="parsley-id-7733"></ul>
                            </div>
                        </div>


                         <div class="form-group">
                            <label class="col-sm-3 control-label">Chất liệu vải:</label>
                            <div class="col-sm-6">
                                <input type="text" name="chatlieuvai" placeholder="Chất liệu vải" required="" class="form-control"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>

                <div class="form-group">
                            <label class="col-sm-3 control-label">Kiểu Dáng:</label>
                            <div class="col-sm-6">
                                <input type="text" name="kieudang" placeholder="Kiểu Dáng" required="" class="form-control"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>


                
                <div class="form-group">
                            <label class="col-sm-3 control-label">XS:</label>
                            <div class="col-sm-6">
                                <input type="number" name="xs" placeholder="Size XS" required="" class="form-control"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>

                <div class="form-group">
                            <label class="col-sm-3 control-label">S:</label>
                            <div class="col-sm-6">
                                <input type="number" name="s" placeholder="Size S" required="" class="form-control"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>

                <div class="form-group">
                            <label class="col-sm-3 control-label">M:</label>
                            <div class="col-sm-6">
                                <input type="number" name="m" placeholder="Size M" required="" class="form-control"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>

                <div class="form-group">
                            <label class="col-sm-3 control-label">L:</label>
                            <div class="col-sm-6">
                                <input type="number" name="l" placeholder="Size L" required="" class="form-control"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>

                <div class="form-group">
                            <label class="col-sm-3 control-label">XL:</label>
                            <div class="col-sm-6">
                                <input type="number" name="xl" placeholder="Size XL" required="" class="form-control"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>
                <div class="form-group">
                            <label class="col-sm-3 control-label">XXL:</label>
                            <div class="col-sm-6">
                                <input type="number" name="xxl" placeholder="Size XXL" required="" class="form-control"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>

                <div class="form-group">
                            <label class="col-sm-3 control-label">XXXL:</label>
                            <div class="col-sm-6">
                                <input type="number" name="xxxl" placeholder="Size XXXL" required="" class="form-control" ><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>




                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Địa Chỉ:</label>
                            <div class="col-sm-6">
                                <input type="text" name="diachi" placeholder="Địa chỉ" required="" class="form-control" data-parsley-id="3284"><ul class="parsley-errors-list" id="parsley-id-3284"></ul><br />
                                <input type="text" name="huyen" placeholder="Quận Huyện" required="" class="form-control" data-parsley-id="3284"><ul class="parsley-errors-list" id="parsley-id-3284"></ul><br />
                                <input type="text" name="tinh" placeholder="Tỉnh" required="" class="form-control" data-parsley-id="3284"><ul class="parsley-errors-list" id="parsley-id-3284"></ul><br />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Đơn Giá / Cái</label>
                            <div class="col-sm-6">
                                <input type="number" name="dongia" data-parsley-minlength="5" data-parsley-type="alphanum" value="99000" required="" class="form-control" data-parsley-id="7733"><ul class="parsley-errors-list" id="parsley-id-7733"></ul>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">VAT:</label>
                            <div class="col-sm-6">
                                <input type="text" name="vat" value="10%" disabled class="form-control" data-parsley-id="3284"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">Chiết Khấu</label>
                            <div class="col-sm-6">
                                <input type="number" name="chietkhau" data-parsley-minlength="5" data-parsley-type="alphanum" placeholder="Chiết khấu" required="" class="form-control" data-parsley-id="7733"><ul class="parsley-errors-list" id="parsley-id-7733"></ul>
                            </div>
                        </div>




                         <div class="form-group">
                            <label class="col-sm-3 control-label">Đã Cọc:</label>
                            <div class="col-sm-6">
                                <input type="number" name="dacoc" data-parsley-minlength="5" data-parsley-type="alphanum" value="0" required="" class="form-control" data-parsley-id="7733"><ul class="parsley-errors-list" id="parsley-id-7733"></ul>
                            </div>
                        </div>

                    

                    <div class="form-group">
                    <label class="col-sm-3 control-label">Hình Thức Chuyển Khoản:</label>
                    <div class="col-sm-6">
                        <select name="hinhthucck" class="form-control">
                            <option>Ngân hàng</option>
                            <option>Tiền mặt</option>
                            <option>Thẻ cào</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Quà Tặng:</label>
                    <div class="col-sm-6">
                        <select name="quatang" class="form-control">
                            <option>Quà 1</option>
                            <option>Quà 2</option>
                            <option>Quà 3</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                            <label class="col-sm-3 control-label">Tên người chuyển khoản:</label>
                            <div name="nguoick" class="col-sm-6">
                                <input type="text" placeholder="Tên người chuyển khoản" required="" class="form-control" data-parsley-id="3284"><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>

                <div class="form-group">
                            <label class="col-sm-3 control-label">Ghi Chú Thanh Toán: </label>
                            <div class="col-sm-6">
                                <textarea type="text" name="ghichutt" placeholder="Thông tin chi tiết thanh toán" required="" class="form-control" data-parsley-id="3284"></textarea><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>


                <div class="form-group">
                            <label class="col-sm-3 control-label">Ghi Chú Đơn Hàng: </label>
                            <div class="col-sm-6">
                                <textarea type="text" name="ghichudh" placeholder="Ghi chú thêm thông tin đơn hàng" required="" class="form-control" data-parsley-id="3284"></textarea><ul class="parsley-errors-list" id="parsley-id-3284"></ul>
                            </div>
                        </div>

               


</div>

                </div>
                <div class="bg-default content-box text-center">
                    <button type="submit" id="submit-creat" class="btn btn-lg btn-primary">TẠO ĐƠN</button>
                </div>
            </form>
        </div>
    </div>
</div>







<script>
    $(document).ready(function(){
        $("#submit-creat").on('click', function(){
            var f = $("#creat_order_form").serialize();
            console.log(f);
            $.ajax({
                url: 'haclient/order/creat_order.php',
                type : "POST",
                dataType : 'json',
                data : $("#creat_order_form").serialize(), // post data || get data
                success : function(result) {  
                console.log(result);         
                },
                error: function(xhr, resp, text) {
                    //console.log(xhr, resp, text);
                  //  $(".alert-content #id-order").html(xoa[0]);
                    $('.alert-danger').show();
                    setTimeout(function (){
                         $('.alert-danger').hide();
                        }, 3000);
                }
            })
        });
    });

</script>