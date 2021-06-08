<section id="content">
	<div class="container account">
        <div class="col-main col-md-9 col-sm-12">
            <div class="my-account">
                <div class="general__title">
                    <h2><span>List of orders</span></h2>
                </div>
                <div class="dashboard">
                    <div class="recent-orders">
                        <div class="table-responsive">
                            <table class="data-table" id="my-orders-table" style="padding-right: 10px;">
                                <thead>
                                    <tr class="first last">
                                        <th class="text-left" style="
    width: 85px;
">Order</th>
                                        <th style="    width: 150px;">Day</th>
                                        <th>Delivery address</th>
                                        <th style="
    width: 150px;
    text-align: center;
"><span class="nobr">Order value</span></th>
                                        <th style="
    width: 100px;
    text-align: center;
">See</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $order = $this->Mcategory->order_listorder_customerid($info['id']);
                                    foreach ($order as $value):?>
                                        <tr class="first odd">
                                            <td>#<?php echo $value['orderCode'] ?></td>
                                            <td><?php echo $value['orderdate'] ?></td>
                                            <td><?php echo $value['address'] ?></td>
                                            <td style="text-align: center;"><span class="price-2"><?php echo number_format($value['money']) ?> VND</span></td>
                                            <td class="a-center last"><span class="nobr"> <a href="account/orders/<?php echo $value['id'] ?>">See details</a></span></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="col-right sidebar col-md-3 col-xs-12">
            <div class="block block-account">
                <div class="general__title">
                    <h2><span>Account information</span></h2>
                </div>
                <div class="block-content">
                    <p>Full Name: <strong><?php echo $info['username'] ?></strong></p>
                    <p>Address: <strong>
                        <?php 
                            if($info['address']!='')
                                echo $info['addesss'];
                            else{
                                echo '-';
                            }
                        ?>
                    </strong></p>
                    <p>Phone Number: <strong><?php echo $info['phone'] ?></strong></p>
                    <p>Email: <strong><?php echo $info['email'] ?></strong></p>
                    <p><a href="/account/update" class="button">Edit</a></p>
                </div>
            </div>
        </aside>
    </div>
</section>