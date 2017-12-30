
        <div class="example-box-wrapper">
            <div class="scroll-columns">
                <table class="table table-bordered table-striped table-condensed cf">
                    <thead class="cf">
                    <tr>
                         <th>#Mã</th>
                            <th>Tên</th>
                            <th>FILE</th>
                            <th>#CHỐT</th>
                            <th>#IN</th>
                            <th>#PHÔI</th>
                            <th>#VẢI</th>
                            <th>#CẮT</th>
                            <th>#MAY</th>
                            <th>#QC</th>
                            <th>#GÓI</th>
                            <th>#GỬI</th>
                            <th>EXP</th>
                            <th>TT</th>
                            <th>E</th>
                            <th>V</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>AAC</td>
                        <td>Đào Duy Khánh</td>
                        <td>Tải</td>
                       <td class="numeric"><span class="bs-badge badge-success">OK</span></td>
                        <td class="numeric"><span class="bs-badge badge-success">OK</span></td>
                        <td class="numeric"><span class="bs-badge badge-success">OK</span></td>
                        <td class="numeric"><span class="bs-badge badge-success">OK</span></td>
                        <td class="numeric"><span class="bs-badge badge-success">OK</span></td>
                        <td class="numeric"><span class="bs-badge badge-success">OK</span></td>
                        <td class="numeric"><span class="bs-badge badge-success">OK</span></td>
                       <td class="numeric"><span class="bs-badge badge-success">OK</span></td>
                        <td class="numeric"><span class="bs-badge badge-success">OK</span></td>
                        <td>20-1-2018</td>
                        <td> <span class="bs-badge badge-danger">S</span></td>
                        <td><i class="glyph-icon icon-pencil"></i></td>
                        <td><a href="#thongtin" data-id="121" data-toggle="modal" data-target=".bs-example-modal-lg" class="opacity-dialog-60" id="data-modal-ok"><i class="glyph-icon icon-eye"></i></a></td>
                    </tr>

                    
                    </tbody>
                </table>
            </div>
        </div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title"><b>#HA-<span id="name-order"></span></b></h4>
                                </div>
                                <div class="modal-body">
                                   <div class="fetched-data"></div>
                                    <div id="bookId" name="bookId"> </div>
                                    <div id="fet" name="fet"> </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>

                                </div>
                            </div>
                        </div>
                    </div>

       <div id="loader-overlay" class="ui-front loader ui-widget-overlay bg-default opacity-60 bg-black opacity-30 bg-green bg-white" style="display: none;"><img src="<?php echo style; ?>/images/spinner/loader-dark.gif" alt=""></div>

<script type="text/javascript">
    $(document).on("click", "#data-modal-ok", function (e) {
        var load = $(this).data('id');
        $.ajax({
            type : 'post',
            url : 'haclient/order/fetch_data.php', //Here you will fetch records 
            data :  'load='+ load, //Pass $id
            success : function(data){
            $(".modal-body #fet").html(data);
            $(".modal-title #name-order").html(load);//Show fetched data from database
            }
        });
     });
</script>