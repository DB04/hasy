
<!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/widgets/datatable/datatable.css">-->
<script type="text/javascript" src="<?php echo style; ?>/widgets/datatable/datatable.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/datatable/datatable-bootstrap.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/datatable/datatable-tabletools.js"></script>

<script type="text/javascript">

    /* Datatables basic */

    $(document).ready(function() {
        $('#datatable-example').dataTable();
    });

    /* Datatables hide columns */

    $(document).ready(function() {
        var table = $('#datatable-hide-columns').DataTable( {
            "scrollY": "300px",
            "paging": false
        } );

        $('#datatable-hide-columns_filter').hide();

        $('a.toggle-vis').on( 'click', function (e) {
            e.preventDefault();

            // Get the column API object
            var column = table.column( $(this).attr('data-column') );

            // Toggle the visibility
            column.visible( ! column.visible() );
        } );
    } );

    /* Datatable row highlight */

    $(document).ready(function() {
        var table = $('#datatable-row-highlight').DataTable();

        $('#datatable-row-highlight tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('tr-selected');
        } );
    });



    $(document).ready(function() {
        $('.dataTables_filter input').attr("placeholder", "Search...");
    });

</script>
<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/jgrowl-notifications/jgrowl.css">-->
<script type="text/javascript" src="<?php echo style; ?>/widgets/jgrowl-notifications/jgrowl.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/jgrowl-notifications/jgrowl-demo.js"></script>

<!-- Noty notifications -->

<!--<link rel="stylesheet" type="text/css" href="<?php echo style; ?>/noty-notifications/noty.css">-->
<script type="text/javascript" src="<?php echo style; ?>/widgets/noty-notifications/noty.js"></script>
<script type="text/javascript" src="<?php echo style; ?>/widgets/noty-notifications/noty-demo.js"></script>
<div class="row">
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            QUẢN LÝ ĐƠN HÀNG
        </h3>
        <div class="example-box-wrapper">


            <div id="form-wizard-3" class="form-wizard" >
                <ul>
                    <li class="active">
                        <a href="#step-2" data-toggle="tab">
                            <label class="wizard-step">1</label>
                      <span class="wizard-description">
                         Chốt Đơn
                      </span>
                        </a>
                    </li>


                    <li class="">
                        <a href="#step-3" data-toggle="tab">
                            <label class="wizard-step">2</label>
                      <span class="wizard-description">
                         In
                      </span>
                        </a>
                    </li>


                    <li class="">
                        <a href="#step-4" data-toggle="tab" aria-expanded="false">
                            <label class="wizard-step">3</label>
                      <span class="wizard-description">
                         Ra Phôi
                      </span>
                        </a>
                    </li>

                    <li class="">
                        <a href="#step-5" data-toggle="tab" aria-expanded="false">
                            <label class="wizard-step">4</label>
                      <span class="wizard-description">
                         Lấy Vải
                      </span>
                        </a>
                    </li>


                    <li class="">
                        <a href="#step-6" data-toggle="tab" aria-expanded="false">
                            <label class="wizard-step">5</label>
                      <span class="wizard-description">
                         Cắt Vải
                      </span>
                        </a>
                    </li>


                    <li class="">
                        <a href="#step-7" data-toggle="tab" aria-expanded="false">
                            <label class="wizard-step">6</label>
                      <span class="wizard-description">
                         May
                      </span>
                        </a>
                    </li>


                    <li class="">
                        <a href="#step-8" data-toggle="tab" aria-expanded="false">
                            <label class="wizard-step">7</label>
                      <span class="wizard-description">
                         Kiểm Định
                      </span>
                        </a>
                    </li>


                    <li class="">
                        <a href="#step-9" data-toggle="tab" aria-expanded="false">
                            <label class="wizard-step">8</label>
                      <span class="wizard-description">
                         Đóng Gói
                      </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#step-10" data-toggle="tab" aria-expanded="false">
                            <label class="wizard-step">9</label>
                      <span class="wizard-description">
                         Gửi Hàng
                      </span>
                        </a>
                    </li>
                </ul>

<div class="alert alert-success">
                        <div class="bg-green alert-icon">
                            <i class="glyph-icon icon-check"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">THÀNH CÔNG</h4>
                            <p>Cập nhật trạng thái đơn hàng <code> #HA-<span id="id-order"> </span></code> hoàn thành. </p>
                        </div>
                    </div>

<div class="alert alert-danger">
                        <div class="bg-red alert-icon">
                            <i class="glyph-icon icon-stop"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">KHÔNG THÀNH CÔNG</h4>
                            <p>Không thể cập nhật trạng thái đơn hàng <code> #HA-<span id="id-order"> </span></code>. </p>
                        </div>
                    </div>



                <div class="tab-content" id="all_reload">
                    <div class="tab-pane active" id="step-2">
                        <div class="content-box">
                            <h2 class="content-box-header bg-primary">
                                Đơn Hàng Cần Chốt
                            </h2>
                            <div class="content-box-wrapper" id="reload-1">
                                <?php include('order/table_1.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="step-3">
                        <div class="content-box">
                            <h3 class="content-box-header bg-success">
                                Đơn Hàng Cần In
                            </h3>
                            <div class="content-box-wrapper" id="reload-2">
                                <?php include('order/table_2.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="step-4">
                        <div class="content-box">
                            <h3 class="content-box-header bg-danger">
                                Đơn Hàng Cần Ra Phôi
                            </h3>
                            <div class="content-box-wrapper" id="reload-3">
                                <?php include('order/table_3.php'); ?>
                            </div>
                        </div>
                    </div>
                     <div class="tab-pane" id="step-5">
                        <div class="content-box">
                            <h3 class="content-box-header bg-warning">
                                Đơn Hàng Cần Lấy Vải
                            </h3>
                            <div class="content-box-wrapper" id="reload-4">
                               <?php include('order/table_4.php'); ?>
                            </div>
                        </div>
                    </div>
                     <div class="tab-pane" id="step-6">
                        <div class="content-box" >
                            <h3 class="content-box-header bg-info">
                                Đơn Hàng Cần Cắt
                            </h3>
                            <div class="content-box-wrapper" id="reload-5">
                                <?php include('order/table_5.php'); ?>
                            </div>
                        </div>
                    </div>
                     <div class="tab-pane" id="step-7">
                        <div class="content-box">
                            <h3 class="content-box-header bg-blue-alt">
                                Đơn Hàng Cần May
                            </h3>
                            <div class="content-box-wrapper" id="reload-6">
                                <?php include('order/table_6.php'); ?>
                            </div>
                        </div>
                    </div>
                     <div class="tab-pane" id="step-8">
                        <div class="content-box">
                            <h3 class="content-box-header bg-yellow">
                                Đơn Hàng Cần Kiểm Định
                            </h3>
                            <div class="content-box-wrapper" id="reload-7">
                                <?php include('order/table_7.php'); ?>
                            </div>
                        </div>
                    </div>
                     <div class="tab-pane" id="step-9">
                        <div class="content-box">
                            <h3 class="content-box-header bg-purple">
                                Đơn Hàng Cần Đóng Gói
                            </h3>
                            <div class="content-box-wrapper" id="reload-8">
                                <?php include('order/table_8.php'); ?>
                            </div>
                        </div>
                    </div>
                     <div class="tab-pane" id="step-10">
                        <div class="content-box">
                            <h3 class="content-box-header bg-azure">
                                Đơn Hàng Cần Gửi
                            </h3>
                            <div class="content-box-wrapper" id="reload-9">
                                <?php include('order/table_9.php'); ?>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include('order/view.php');
?>