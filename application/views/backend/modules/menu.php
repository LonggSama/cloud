<aside class="main-sidebar">
    <?php 
        $image='';
        if($user['img']){
            $image=$user['img'];
        }else{
            $image='avatar5.png';
        }
    ?>
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="public/images/admin/<?php echo $image ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['fullname'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">FUNCTION</li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin">
                    <i class="fa fa-bar-chart"></i> <span>Statistical</span>
                </a>
            </li>
            <!-- <li class="treeview">
                <a href="<?php echo base_url() ?>admin">
                    <i class="fa fa-bell"></i> <span>Thông báo</span>
                </a>
            </li> -->
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/contact">
                    <i class="fa fa-envelope"></i> <span>Contact</span>
                </a>
            </li>
            <li class="header">CATEGORY MANAGEMENT</li>
            <li class="treeview">
                <a href="<?php echo base_url()?>admin/category">
                    <i class="fa fa-indent"></i><span>Product type</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url()?>admin/producer">
                    <i class="fa fa-gift"></i><span>Supplier</span>
                </a>
            </li>
            <li class="header">STORE MANAGER</li>
            <li>
                <a href="<?php echo base_url()?>admin/product">
                    <i class="fa fa-leaf"></i> Product
                </a>
            </li>
            <li >
                <a href="<?php echo base_url() ?>admin/content">
                    <i class="glyphicon glyphicon-list"></i> News
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>admin/orders">
                    <i class="fa fa-shopping-cart"></i> Order
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/customer">
                    <i class="fa fa-user"></i><span>Customer</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/province">
                    <i class="fa fa-globe"></i><span>Place</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-align-justify"></i><span>Display</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="<?php echo base_url() ?>admin/sliders">
                            <i class="fa fa-cogs"></i> Sliders
                        </a>
                    </li>
                </ul>
            </li>
            <li class="header">SETTING</li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i><span>System</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="<?php echo base_url() ?>admin/configuration/update">
                            <i class="fa fa-cogs"></i> Configuration
                        </a>
                    </li>
                    <?php 
                        $cpnGroup='';
                        if($user['role']==1){
                            $cpnGroup.=
                            "<li>
                                <a href='".base_url()."admin/group'>
                                    <i class='fa fa-lock'></i> User groups
                                </a>
                            </li>";
                        }
                        echo $cpnGroup;
                    ?>
                    <li>
                        <a href="<?php echo base_url() ?>admin/useradmin">
                            <i class="fa fa-users"></i> Member
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="admin/user/logout.html"><i class="fa fa-sign-out text-red"></i> <span>Exit</span></a></li>
            <li><a href="#"><i class="fa fa-question-circle text-yellow"></i> <span>Help</span></a></li>
        </ul>
        
    </section>
    <!-- /.sidebar -->
</aside>