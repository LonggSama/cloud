<?php echo form_open('dang-ky'); ?>
<section id="product-detail">
	<div class="container">
		<div class="col-md-3 col-sm-3 hidden-xs"></div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="products-wrap">
				<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
					<div id="register">
						<div class="acctitle acctitlec"><i class="acc-closed fa fa-user"></i><i class="acc-open fa fa-user-plus"></i>Sign up for an account</div>
						<div class="acc_content clearfix" style="display: block;">
							<form accept-charset="UTF-8" action="" id="customer_register" method="post">
								
								<input name="FormType" type="hidden" value="customer_register">
								<input name="utf8" type="hidden" value="true"> 
								<div class="col_full">
									<label for="first_name">User name:<span class="require_symbol">*</span></label>
									<input type="text" id="first_name" name="username" value="" class="form-control" placeholder="User name">
									<div class="error" id="username_error"><?php echo form_error('username')?></div>
								</div> 
								<div class="col_full">
									<label for="register-form-password">Password:<span class="require_symbol">*</span></label>
									<input type="password" id="register-form-password" name="password" placeholder="Password" class="form-control">
									<div class="error" id="password_error"><?php echo form_error('password')?></div>
								</div>

								<div class="col_full">
									<label for="register-form-repassword">Renter the password:<span class="require_symbol">* </span></label>
									<input type="password" id="register-form-repassword" name="re_password" value="" class="form-control" placeholder="Renter password">
									<div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
								</div>
								<div class="col_full">
									<label for="first_name">Full Name:<span class="require_symbol">*</span></label>
									<input type="text" id="first_name" name="name" placeholder="Full Name" class="form-control">
									<div class="error" id="name_error"><?php echo form_error('name')?></div>
								</div>              
								<div class="col_full">
									<label for="register-form-email">Email:<span class="require_symbol">*</span></label>
									<input type="text" id="register-form-email" name="email" value="" class="form-control" placeholder="Nhập email">
									<div class="error" id="email_error"><?php echo form_error('email')?></div>
								</div>
								<div class="col_full">
									<label for="first_name">Phone Number:<span class="require_symbol">*</span></label>
									<input type="text" id="first_name" name="phone" placeholder="Phone Number" class="form-control">
									<div class="error" id="name_error"><?php echo form_error('phone')?></div>
								</div>
								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" type="submit" style="margin-bottom: 20px">Register</button>
									<ul>
										<li class="right" style="font-size: 0.9em">If you already have an account, click <a href="<?php echo base_url() ?>dang-nhap" style="padding-right:3px;font-size: 0.9em"> here</a>to login !</li>
									</ul>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-3 hidden-xs"></div>
	</div>
</section>
