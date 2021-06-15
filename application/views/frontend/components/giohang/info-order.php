<?php echo form_open('info-order'); ?>
<?php  
    if(!$this->session->userdata('cart'))
    {
        redirect('gio-hang');
    }else{
      $user=$this->session->userdata('info-customer');
      if($this->session->userdata('session24hStore')){
        $user=$this->session->userdata('session24hStore');
        $check=true;
      }else{
        $check=false;
      }
    }
?>
<section id="checkout-cart">
    <div class="container">
        <div class="col-md-12">
            <div class="wrapper overflow-hidden">
                <div class="checkout-header _block bg-pri hidden-xs">
                    <div class="checkout-header _container">
                        <a href="#" class="checkout-header _logo">
                            <!-- <h1 class="color-fff">24hStore</h1> -->
                        </a>
                        <div class="checkout-header _progress-bar">
                            <ol class="step-breadcrumb _list">
                                <li class="step-breadcrumb _item">
                                    <span class="step-breadcrumb _text">1.Store</span>
                                </li>
                                <li class="step-breadcrumb _item -current">
                                    <span class="step-breadcrumb _text">2.Address</span>
                                </li>
                                <li class="step-breadcrumb _item">
                                    <span class="step-breadcrumb _text">3.Result</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8" name='info-order' novalidate>
                    <div class="checkout-content">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-login-checkout" style="margin-bottom: 20px">
                            <p class="text-center">Your delivery address</p>
                            <div class="wrap-info" style="width: 100%; min-height: 1px; overflow: hidden; padding: 10px;">
                                <table class="table tinfo" style="width: 80%;">
                                    <tbody>
                                        <tr>
                                            <td class="width30 text-right td-right-order">Email:</td>
                                            <td>
                                                <input type="text" class="form-control" id="" value="<?php echo $user['email'] ?>" placeholder="Email" disabled>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width30 text-right td-right-order">Name:</td>
                                            <td>
                                                <input type="text" class="form-control" id="" placeholder="Full Name" name="name" value="<?php echo $user['fullname'] ?>">
                                                <div class="error"><?php echo form_error('name')?></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width30 text-right td-right-order">Province / City:</td>
                                            <td>
                                                <select name="city" id="province" onchange="renderDistrict()" class="form-control next-select" >
                                                    <option value="">-- Select a province ---</option>
                                                    <?php $list = $this->Mtinhthanhpho->province_all();
                                                    foreach($list as $row):?>
                                                        <option value="<?php echo $row['matp']; ?>"><?php echo $row['name']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="error"><?php echo form_error('city')?></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width30 text-right td-right-order">District:</td>
                                            <td>
                                                <select name="DistrictId" id="district"  class="form-control next-select">
                                                    <option value="">--- Choose your district ---</option>
                                                </select>
                                                <div class="error"><?php echo form_error('DistrictId')?></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width30 text-right td-right-order">Please fill in EXACTLY "floor, house number, street" to avoid accidental cancellation:</td>
                                            <td>
                                                <textarea name="address"  id="input" placeholder="Please enter EXACTLY 'floor, house number, street' to avoid unintentional cancellation" class="form-control" rows="5" ="" style="height: auto !important;" value="<?php echo $user['address'] ?>"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width30 text-right td-right-order">Phone Number:</td>
                                            <td>
                                                <input type="text"  class="form-control" id="" placeholder="Phone Number" name="phone" value="<?php echo $user['phone'] ?>">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="infor-ship">
                                    <label>Shipment Details</label>
                                    <p>Standard delivery: <?php echo number_format($this->Mconfig->config_price_ship()).' VNĐ'; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 products-detail">
                            <div class="no-margin-table" style="width: 95%; float: right;">
                                <table class="table" style="color: #333;">
                                    <thead>
                                        <tr>
                                            <th colspan="3" style="font-weight: 600;">Information line</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background: #fafafa; color: #333;" class="text-transform font-weight-600">
                                            <td>Sản phẩm</td>
                                            <td class="text-center">Amount</td>
                                            <td class="text-center">Price</td>
                                        </tr>
                                        <?php if($this->session->userdata('cart')):
                                            $data=$this->session->userdata('cart');
                                            $money=0;
                                            foreach ($data as $key => $value) :
                                                $row = $this->Mproduct->product_detail_id($key);?>
                                                <tr>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td class="text-center"><?php echo $value ?></td>
                                                    <td class="text-center">    
                                                        <?php 
                                                            $total=0;
                                                            if($row['price_sale'] > 0){
                                                                $total=$row['price_sale']*$value;
                                                            }else{
                                                                $total=$row['price'] * $value;
                                                            }
                                                            $money+=$total;
                                                            echo number_format($total).' VNĐ';
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <tr style="background: #fafafa">
                                            <td colspan="2">Provisional</td>
                                            <td class="text-center"><?php echo number_format($money).' VNĐ'; ?></td>
                                        </tr>
                                        <tr style="background: #fafafa">
                                            <td colspan="2" class="font-weight-600">Into money<br/><span style="font-weight: 100; font-style: italic;">(Total payment amount)</span></td>
                                            <td class="text-center"><?php echo number_format($money).' VNĐ'; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="btn-checkout frame-100-1 overflow-hidden border-pri">
                        <button type="submit" style="width: 400px" class="pull-left bg-pri border-pri col-fff" name="dathang">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function renderDistrict(){
        var provinceid=$("#province").val();
        var strurl="<?php echo base_url();?>"+'giohang/district';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {'provinceid': provinceid},
            success: function(data) {
                $('#district').html(data);
            }
        });
    };
</script>