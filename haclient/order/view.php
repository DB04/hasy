<!-- jQueryUI Spinner -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/spinner/spinner.js"></script>
<script type="text/javascript">
    /* jQuery UI Spinner */

    $(function() { "use strict";
        $(".spinner-input").spinner();
    });
</script>

<!-- jQueryUI Autocomplete -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/autocomplete/autocomplete.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/autocomplete/menu.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/autocomplete/autocomplete-demo.js"></script>

<!-- Touchspin -->

<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/touchspin/touchspin.css">-->
<script type="text/javascript" src="<?php echo style; ?>/widgets/touchspin/touchspin.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/touchspin/touchspin-demo.js"></script>

<!-- Input switch -->

<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/input-switch/inputswitch.css">-->
<script type="text/javascript" src="<?php echo style; ?>/widgets/input-switch/inputswitch.js"></script>
<script type="text/javascript">
    /* Input switch */

    $(function() { "use strict";
        $('.input-switch').bootstrapSwitch();
    });
</script>

<!-- Textarea -->

<script type="text/javascript" src="<?php echo style; ?>/widgets/textarea/textarea.js"></script>
<script type="text/javascript">
    /* Textarea autoresize */

    $(function() { "use strict";
        $('.textarea-autosize').autosize();
    });
</script>

<!-- Multi select -->

<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/multi-select/multiselect.css">-->
<script type="text/javascript" src="<?php echo style; ?>/widgets/multi-select/multiselect.js"></script>
<script type="text/javascript">
    /* Multiselect inputs */

    $(function() { "use strict";
        $(".multi-select").multiSelect();
        $(".ms-container").append('<i class="glyph-icon icon-exchange"></i>');
    });
</script>

<!-- Uniform -->

<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/uniform/uniform.css">-->
<script type="text/javascript" src="<?php echo style; ?>/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/uniform/uniform-demo.js"></script>

<!-- Chosen -->

<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/chosen/chosen.css">-->
<script type="text/javascript" src="<?php echo style; ?>/widgets/chosen/chosen.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/chosen/chosen-demo.js"></script>
<!-- jGrowl notifications -->






<div class="modal fade bs-example-modal-sm" id="edit-modal-data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title"><b>#HA<span id="id-order"></span> - Xác Nhận Đã<span id="name-order"></span></b></h4>
                                </div>
                                <div class="modal-body">
                                    <form id="form" action="" method="post">
                                        <input type="hidden" name="code" id="madonhang">
                                        <input type="hidden" name="columns" id="columns">
                                       <div class="checkbox checkbox-success">
                                    <label>
                                        <div class="checker" id="uniform-inlineCheckbox111"><span class="">
                                            <input type="checkbox" id="inlineCheckbox111" checked="" name="xong" value="1" class="custom-checkbox"><i class="glyph-icon icon-check"></i></span></div>
                                        Đã<code id="name-order"></code> Hoàn Tất
                                    </label>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="submit" type="button" class="btn btn-success" data-dismiss="modal">Lưu</button>

                                </div>
                            </form>
                            </div>
                        </div>
</div>
<script type="text/javascript">
    $(document).on("click", "#data-modal-edit", function (e) {
        var load = $(this).data('id');
        var load = load.split('-');
        var action = ['', ' Chốt ', ' In ', ' Ra Phôi ', ' Lấy Vải ', ' Cắt Vải ',' May ',' Kiểm Định ', ' Đóng Gói ',' Gửi Hàng '];
        $.ajax({
            type : 'post',
            url : 'haclient/order/post_edit.php', //Here you will fetch records 
            data :  'load='+ load[0], //Pass $id
            success : function(data){
            $(".modal-body #madonhang").val(load[0]);
            $(".modal-body #columns").val(load[1]);
            $(".modal-title #id-order").html(load[0]);
            $(".modal-title #name-order").html(action[load[1]]);
            $(".modal-body #name-order").html(action[load[1]]);//Show fetched data from database
            }
        });
     });
</script>
<script>
    $(document).ready(function(){
        $('.alert-success').hide();
        $('.alert-danger').hide();
        $("#submit").on('click', function(){
            var f = $("#form").serialize();
            var xoa = f.split('=');
            var xoa = xoa[1].split('&');
            var ref = f.split('=');
            var ref = ref[2].split('&');
            var ref = parseInt(ref[0]) + 1;
            $.ajax({
                url: 'haclient/order/update.php',
                type : "POST",
                dataType : 'json',
                data : $("#form").serialize(), // post data || get data
                success : function(result) {
                    if(result === 1){
                    //$("#all_reload").load(window.location.href + " #all_reload");
                    for(i=1;i<10;i++){
                    $("#reload-" + i).load(window.location.href + " #reload-" + i);
                    }
                    $('tr.tr-' + xoa[0]).hide();
                    $(".alert-content #id-order").html(xoa[0]);
                    $('.alert-success').show();
                    setTimeout(function (){
                         $('.alert-success').hide();
                        }, 3000);

                    } else {
                    $(".alert-content #id-order").html(xoa[0]);
                    $('.alert-danger').show();
                    setTimeout(function (){
                         $('.alert-danger').hide();
                        }, 3000);
                    }
                    
                    
                },
                error: function(xhr, resp, text) {
                    //console.log(xhr, resp, text);
                    $(".alert-content #id-order").html(xoa[0]);
                    $('.alert-danger').show();
                    setTimeout(function (){
                         $('.alert-danger').hide();
                        }, 3000);
                }
            })
        });
    });

</script>







<div class="modal fade bs-example-modal-lg" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
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
<div id="loader-overlay" class="ui-front loader ui-widget-overlay bg-default opacity-80 bg-black opacity-30 bg-green bg-white" style="display: none;"><img src="<?php echo style; ?>/images/spinner/loader-dark.gif" alt=""></div>
<script type="text/javascript">
    $(document).on("click", "#data-modal-ok", function (e) {
        var load = $(this).data('id');
        $.ajax({
            type : 'post',
            url : 'haclient/order/get_view.php', //Here you will fetch records 
            data :  'load='+ load, //Pass $id
            success : function(data){
            $(".modal-body #fet").html(data);
            $(".modal-title #name-order").html(load);//Show fetched data from database
            }
        });
     });
</script>
