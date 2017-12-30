<div class="row">
<div class="col-sm-6">
                            <form class="form-inline justify-content-sm-end" action="<?php echo url;?>/?home=don-hang&per=1&" method="get">
                               &nbsp<select class="form-control form-control-sm rounded bright" name="selected" onchange='if(this.value != 0) { this.form.submit(); }'>
                                <option  value="0">
                                  Select Status
                                </option>
                                <option value="1">
                                  Pending
                                </option>
                                <option value="Active">
                                  Active
                                </option>
                                <option value="Cancelled">
                                  Cancelled
                                </option>
                              </select>
                            </form>
                          </div>
                        </div><br />
<?php
switch ($_GET['code']) {
  case 1:
    # code...
    break;
  
  default:
    # code...
    break;
}



switch (permision) {
	case 0:
		#null
		break;
  case 1:
    #Seller
  include('order/new.php');
  include('order/called.php');
  include('order/chot.php'); #Action
  include('order/xuly.php'); # Action
  include('order/hoanthanh.php');
  include('order/thatbai.php');
    break;
	case 2:
	include('order/chot.php');
  include('order/xuly.php');
  include('order/hoanthanh.php');
		break;
  case 3:
  include('order/xuly.php'); #Action`
  include('order/hoanthanh.php');
  include 'order/hoan.php';
    break;
	case 69:
  include('order/new.php');
  include('order/called.php');
  include('order/chot.php');
  include('order/xuly.php');
  include('order/hoanthanh.php');
  include('order/thatbai.php');
  include 'order/hoan.php';
		break;
	default:
		# code...
		break;
}