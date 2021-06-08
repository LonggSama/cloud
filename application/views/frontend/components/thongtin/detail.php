<div class="container order-page">
	<div class="general__title">
		<h2>Order details</h2>
	</div>
	<div class="table-responsive">
		<fieldset>
			<table class="table table-bordered tb-detail-or">
				<thead>
					<tr class="">
						<th>Product</th>
						<th>Price</th>
						<th>Amount</th>
						<th>Into money</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($row as $value) :?>
						<tr>
							<td><a href="<?php echo $value['alias'] ?>"><?php echo $value['name'] ?></a></td>
							<td><?php echo number_format($value['price']) ?> VND</td>
							<td><?php echo $value['count'] ?></td>
							<td><?php echo number_format($value['price']*$value['count']) ?> VND</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
	</div>
	<div class="or-detail-c">
		<div class="col-sm-4">
			<div class="general__title">
				<h3>Billing Information</h3>
			</div>
			<div class="content-order">
				<p><?php echo $info['fullname'] ?></p>
				<p><?php echo $info['orderdate'] ?></p>
				<p><?php echo $info['phone'] ?></p>
				<p><?php $name=$this->Mtinhthanhpho->province_name($info['province']); echo $name;?></p>
				<p><?php $name2=$this->Mdistrict->district_name($info['district']); echo $name2; ?></p>
				<p><?php echo $info['address'] ?></p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="general__title">
				<h3>Shipment Details</h3>
			</div>
			<div class="content-order">
				<p><?php echo $info['fullname'] ?></p>
				<p><?php echo $info['orderdate'] ?></p>
				<p><?php echo $info['phone'] ?></p>
				<p><?php $name=$this->Mtinhthanhpho->province_name($info['province']); echo $name;?></p>
				<p><?php $name2=$this->Mdistrict->district_name($info['district']); echo $name2; ?></p>
				<p><?php echo $info['address'] ?></p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="general__title">
				<h3>Bill total</h3>
			</div>
			<div class="content-order">
				<table class="table">
					<tbody>
						<tr>
							<td> Total money </td>
							<td class="text-right"><span class="price-2"><?php echo number_format($info['money']) ?> VND</span></td>
						</tr>
						
						<tr>
							<td>Free:</td>
							<td class="text-right"><span class="price-2">0 VND</span></td>
						</tr>
						
						
						<tr>
							<td> Need payment </td>
							<td class="text-right"><span class="price-2"><?php echo number_format($info['money']) ?> VND</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-xs-12">
			<a href="javascript:;" onclick="window.history.go(-1);" class="viewMore pull-left" style="font-size: 15px;"><i class="fa fa-angle-left" aria-hidden="true"></i> Return to previous page</a>
		</div>
	</div>
</div>