<html>
	<head><title>Welcome to!</title></head>
	<body>
		<div style="font-family:&quot;Arial&quot;,Helvetica Neue,Helvetica,sans-serif;line-height:18pt">
			<p>Xin chào <?php 
				if($customer){
					if($customer['fullname'] !=''){
						echo $customer['fullname'];
					}else{
						echo 'quý khách';
					}
				}
			?></p>
			<p>Thank you for your order <strong>AppPhakeStore</strong>!</p>
			<p>Your order has been received, we will contact you shortly.</p>
			<div>
			<table style="width:100%;border-collapse:collapse">
				<thead>
					<tr>
						<th style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-top:1px solid #d7d7d7;padding:5px 10px;text-align:left"><strong>Buyer's Information</strong></th>
						<th style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-top:1px solid #d7d7d7;padding:5px 10px;text-align:left"><strong>Receiver's information</strong></th>
					</tr>
				</thead>
			<tbody>
				<tr>
					<td style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-bottom:1px solid #d7d7d7;padding:5px 10px">
						<table style="width:100%">
							<tbody>
								<tr>
									<td>Full Name:</td>
									<td><?php echo $order['fullname'] ?></td>
								</tr>
								
								<tr>
									<td>Phone Number:</td>
									<td><?php echo $order['phone'] ?></td>
								</tr>
								
								<tr>
									<td>Email:</td>
									<td><?php echo $customer['email'] ?></td>
								</tr>
								
								<tr>
									<td>Address:</td>
									<td><?php echo $order['address'] ?></td>
								</tr>
								
								<tr>
									<td>District:</td>
									<td><?php if($province){
											echo $province;
										}else{
											echo '-';
										}?></td>
								</tr>
								
								<tr>
									<td>Province:</td>
									<td><?php if($district){
											echo $district;
										}else{
											echo '-';
										}?></td>
								</tr>
							</tbody>
						</table>
					</td>
					<td style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-bottom:1px solid #d7d7d7;padding:5px 10px">
						<table style="width:100%">
							<tbody>
								<tr>
									<td>Full Name:</td>
									<td><?php echo $order['fullname'] ?></td>
								</tr>
								
								<tr>
									<td>Phone Number:</td>
									<td><?php echo $order['phone'] ?></td>
								</tr>
								
								<tr>
									<td>Email:</td>
									<td><?php echo $customer['email'] ?></td>
								</tr>
								
								<tr>
									<td>Address:</td>
									<td><?php echo $order['address'] ?></td>
								</tr>
								<!-- <tr>
									<td>Xã phường:</td>
									<td><?php
										if($ward){
											echo $ward;
										}else{
											echo '-';
										}
									?></td>
								</tr> -->
								<tr>
									<td>District:</td>
									<td><?php if($province){
											echo $province;
										}else{
											echo '-';
										}?></td>
								</tr>
								
								<tr>
									<td>Province:</td>
									<td><?php if($district){
											echo $district;
										}else{
											echo '-';
										}?></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-bottom:1px solid #d7d7d7;padding:5px 10px">
						<p><strong>Payments: </strong>Payment on delivery (COD)</p>
						<p><strong>Transport fee: </strong> <?php echo number_format($priceShip) ?><br>
						</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div>
		<div style="font-size:18px;padding-top:10px"><strong>Information line</strong></div>
		<table>
			<tbody>
				<tr>
					<td>Code orders: <strong>#<?php echo $order['orderCode'] ?></strong></td>
					<td style="padding-left:40px">Date created: <?php echo $order['orderdate'] ?></td>
				</tr>
			</tbody>
		</table>
		<table style="width:100%;border-collapse:collapse">
			<thead>
				<tr style="border:1px solid #d7d7d7;background-color:#f8f8f8">
					<th style="padding:5px 10px;text-align:left"><strong>Product</strong></th>
					<th style="text-align:center;padding:5px 10px"><strong>Amount</strong></th>
					<th style="padding:5px 10px;text-align:right"><strong>Total</strong></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($orderDetail as $value) :?>
					<tr style="border:1px solid #d7d7d7">
						<td style="padding:5px 10px"><?php echo $value['name']; ?></td>
						<td style="text-align:center;padding:5px 10px"><?php echo $value['count'] ?></td>
						<td style="padding:5px 10px;text-align:right"><?php echo number_format($value['price']) ?> VNĐ</td>
					</tr>
				<?php endforeach; ?>
				<tr style="border:1px solid #d7d7d7">
					<td colspan="2">&nbsp;</td>
					<td colspan="2">
					<table style="width:100%">
						<tbody>
							<tr>
								<td><strong>Transport fee:</strong></td>
								<td style="text-align:right"><?php echo  number_format($priceShip) ?> VNĐ</td>
							</tr>
							<tr>
								<td><strong>Total money</strong></td>
								<td style="text-align:right"><?php echo number_format($order['money']) ?> VNĐ</td>
							</tr>
						</tbody>
					</table>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p>To check your order status, please:</p>
	<div style="font-size:18px">
		<a href="<?php echo base_url() ?>dang-nhap" style="padding:15px;background-color:#7fc142;color:#fff" target="_blank">Sign in to your account</a>
	</div>
	&nbsp;
	<hr>
	<p style="text-align:right">If you have any questions, please contact us at <span style="color:#17a3dd"><a href="mailto:longnvhbhaf190218@gmail.com" target="_blank">longnvhbhaf190218@gmail.com</a></span></p>
	<p style="text-align:right"><i>Best regards,</i></p>
	<p style="text-align:right"><strong>Store management board AppPhakeStore</strong></p><div class="yj6qo"></div><div class="adL">
	</div>
	</div>
	</body>
</html>