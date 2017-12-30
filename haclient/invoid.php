<?php
require('../haconfig/config.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ĐỒNG PHỤC HẢI ANH</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="//fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo style; ?>/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo style; ?>/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo style; ?>/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo style; ?>/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo style; ?>/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo style; ?>/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?php echo css; ?>/main.css?version=2.6" rel="stylesheet">
  </head>
  <body>
<div class="element-wrapper">
                <div class="invoice-w">
                  <div class="infos">
                    <div class="info-1">
                      <div class="invoice-logo-w">
                        <img alt="" src="img/logo2.png">
                      </div>
                      <div class="company-name">
                        HAIANH UNIFORM
                      </div>
                      <div class="company-address">
                        129A Nguyễn Trãi, <br>Thanh Xuân, Hà Nội
                      </div>
                      <div class="company-extra">
                        tel. 858.745.5577
                      </div>
                    </div>
                    <div class="info-2">
                      <div class="company-name">
                        THÔNG TIN KHÁCH HÀNG
                      </div>
                      <div class="company-address">
                        210 Benson Lane, Suite 430<br>Queens, NY 11243<br>United States
                      </div>
                    </div>
                  </div>
                  <div class="invoice-heading">
                    <h3>
                      Ngày tạo
                    </h3>
                    <div class="invoice-date">
                      <?PHP echo hadate; ?>
                    </div>
                  </div>
                  <div class="invoice-body">
                    <div class="invoice-desc">
                      <div class="desc-label">
                        Mã #
                      </div>
                      <div class="desc-value">
                        HSFB 342823
                      </div>
                    </div>
                    <div class="invoice-table">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              Sản phẩm
                            </th>
                            <th>
                              SL
                            </th>
                            <th class="text-right">
                              Thành Tiền
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              User Interface
                            </td>
                            <td>
                              2
                            </td>
                            <td class="text-right">
                              $4,500
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Framework Development
                            </td>
                            <td>
                              4
                            </td>
                            <td class="text-right">
                              $9,750
                            </td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td>
                              Tổng
                            </td>
                            <td class="text-right" colspan="2">
                              $15,490
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <div class="invoice-footer">
                    <div class="invoice-logo">
                      <img alt="" src="img/logo.png"><span>Paper Inc</span>
                    </div>
                    <div class="invoice-info">
                      <span>hello@paper.inc</span><span>858.757.4455</span>
                    </div>
                  </div>
                </div>
              </div>
            <div class="display-type"></div>
    </div>
    <script src="<?php echo style; ?>/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo style; ?>/moment/moment.js"></script>
    <script src="<?php echo style; ?>/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo style; ?>/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo style; ?>/ckeditor/ckeditor.js"></script>
    <script src="<?php echo style; ?>/bootstrap-validator/dist/validator.min.js"></script>
    <script src="<?php echo style; ?>/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo style; ?>/dropzone/dist/dropzone.js"></script>
    <script src="<?php echo style; ?>/editable-table/mindmup-editabletable.js"></script>
    <script src="<?php echo style; ?>/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo style; ?>/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo style; ?>/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?php echo style; ?>/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo style; ?>/bootstrap/js/dist/util.js"></script>
    <script src="<?php echo style; ?>/bootstrap/js/dist/tab.js"></script>

    <script src="<?php echo js; ?>/main.js?version=2.6"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-42863888-9', 'auto');
      ga('send', 'pageview');
    </script>