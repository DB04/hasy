
<div class="element-wrapper">
  <div class="element-box">
    <h5 class="form-header">
      DANH SÁCH KHÁCH HÀNG
    </h5>

    <div class="controls-above-table">
        <div class="col-sm-12">
          <a class="btn btn-sm btn-primary" href="#">XUẤT CSV</a>
        </div>
        <div class="col-sm-">
          <form class="form-inline justify-content-sm-end">
            <input class="form-control form-control-sm rounded bright" placeholder="TÌM KIẾM" type="text"><select class="form-control form-control-sm rounded bright">
              <option selected="selected" value="">
                Trạng thái
              </option>
              <option value="Pending">
                Đang xử lí
              </option>
              <option value="Active">
                Hoàn Thành
              </option>
              <option value="Cancelled">
                Hủy
              </option>
            </select>
          </form>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-lightborder">
        <thead>
          <tr>
          	<th>
              # Mã khách hàng
            </th>
            <th>
              Họ Tên
            </th>
            <th>
              Năm Sinh
            </th>
            <th>
              Số lần đặt hàng
            </th>
            <th>
              Khu Vực
            </th>
            <th>
              Nguồn
            </th>
            <th class="text-center">
              Trạng Thái
            </th>
            <th class="text-right">
              Tổng
            </th>
          </tr>
        </thead>
        <tbody>
        	<?php for($i=0;$i<20;$i++){
        		?>
        	          <tr>
          	<td>
          		#HA-42548A4158
            </td>
            <td>
              John Mayers
            </td>
            <td>
              2005
            </td>
            <td>
              12
            </td>
            <td>
              Hà Nội
            </td>
             <td>
              Facebook
            </td>
            <td class="text-center">
              <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
            </td>
            <td class="text-right">
              $354
            </td>
          </tr>
          <?php } ?>

 

        </tbody>
      </table>
    </div>
  </div>
</div>