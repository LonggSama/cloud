<section id="header">
	<nav class="navbar navbar-inverse" style="z-index: 9999">
      	<div class="container">
	        <div class="col-md-12 col-lg-12">
	        	<div class="navbar-header">
		          	<button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		          	</button>
		          	<div class="icon-cart-mobile hidden-md hidden-lg">
		          		<a href="#">
		          			<i class="fa fa-shopping-cart" aria-hidden="true"></i>
		          			<span>0</span>
		          		</a>
		          	</div>
                    <!-- <div class="site-container">
                        <a href="#" class="header__icon pull-left" id="header__icon"></a>
                    </div> -->
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
		          	<ul class="nav navbar navbar-nav" id="nav1">
		            	<li><a href="/">Home page</a></li>
		            	<li><a href="san-pham/1">Product</a></li>
		            	<li><a href="tin-tuc/1">News</a></li>
		            	<li><a href="gioi-thieu">Introduce</a></li>
		            	<li><a href="lien-he">Contact</a></li>
		            	<li><a href="thong-tin-tai-khoan">Account</a></li>
						<?php 
							if($this->session->userdata('session24hStore')){
								echo "<li><a href='dang-xuat'>Exit</a></li>";
							}else{
								echo "<li><a href='dang-ky'>Register</a></li>";
								echo "<li><a href='dang-nhap'>Log-in</a></li>";
							}
						?>
		            	<!-- <li><a href="dang-ky">Đăng ký</a></li>
		            	<li><a href="dang-nhap">Đăng nhập</a></li> -->
		          	</ul>
		          	<ul class="nav navbar navbar-nav pull-right" id="nav2">
		            	<!-- <li><a href="dang-ky">Đăng ký</a></li>
		            	<li><a href="dang-nhap">Đăng nhập</a></li> -->
		            	<li><a href="thong-tin-tai-khoan">Account</a></li>
		            	<?php 
							if($this->session->userdata('session24hStore')){
								echo "<li><a href='dang-xuat'>Exit</a></li>";
							}else{
								echo "<li><a href='dang-ky'>Register</a></li>";
								echo "<li><a href='dang-nhap'>Log-in</a></li>";
							}
						?>
		          	</ul>
		        </div>
               <!--  <div class="site-pusher">
                   <nav class="menu">
                       <a href="#" class="text-center">Trang chủ</a>
                       <a href="san-pham/1" class="text-center">Sản phẩm</a>
                       <a href="tin-tuc/1" class="text-center">Tin tức</a>
                       <a href="#" class="text-center">Giới thiệu</a>
                       <a href="#" class="text-center">Liên hệ</a>
                   </nav>
               </div> -->
	        </div>
      	</div>
    </nav>
</section>