<?php echo form_open( base_url()."lien-he"); ?>
<section>
	<div class="container">
	<div class="col-md-3">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-menu pull-left">
                    <?php $this->load->view('frontend/modules/category'); ?> 
                </div>
                	
                
	</div>
	
		<div class="col-md-6 ">
			<div class="section-article contactpage" style="
    padding-left: 20px;">
			<?php 
				echo validation_errors();
				
			 ?>
			   	<form accept-charset="UTF-8" action="<?php echo base_url() ?>lien-he" id="contact" method="post">
					<input name="FormType" type="hidden" value="contact">
					<input name="utf8" type="hidden" value="true">
						<h1 style="color: black">Contact us</h1>				
					
				    <div class="form-comment">
				        <div class="form-group">
				            <label for="name"><em> Full Name</em><span class="required">*</span></label>
				            <input id="name" name="fullname" type="text" value="" class="form-control">
				        </div>
				        <div class="form-group">
				            <label for="email"><em> Email</em><span class="required">*</span></label>
				            <input id="email" name="email" class="form-control" type="email" value="">
				        </div>
				        <div class="form-group">
				            <label for="phone"><em> Phone Number</em><span class="required">*</span></label>
				            <input type="number" id="phone" class="form-control" name="phone">

				        </div>
				        <div class="form-group">
				            <label for="message"><em> Title</em><span class="required">*</span></label>
				            <textarea id="message" name="title" class="form-control custom-control" rows="2"></textarea>
				        </div>
				        <div class="form-group">
				            <label for="message"><em> Message</em><span class="required">*</span></label>
				            <textarea id="message" name="content" class="form-control custom-control" rows="6"></textarea>
				        </div>

				        <button type="submit" class="btn-update-order" >
				        	
				        </style>Submit a review</button>

				    </div>
			   </form>
			</div>
		</div>
		<div class="col-md-3">
	            <!-- <div class="f-contact" style="
	                padding-left: 32px;
	            ">
	                                    <h1 style="color: black">Th??ng tin li??n h???</h1>
	                                    <ul class="list-unstyled">
	                                        <li class="clearfix">
	                                            <i class="fa fa-map-marker fa-1x" style="color:#8ac400 "></i>
	                                            <span style="color: black"> 249 Tr???n Quang Kh???i, T??n ?????nh, Q1</span><br>
	                                        </li>
	                                        <li class="clearfix">
	                                            <i class="fa fa-phone fa-1x" style="color:#8ac400"></i>
	                                            <span style="color: black">08.62632424 - 0981.242424</span>
	                                        </li>
	                                        <li class="clearfix">
	                                            <i class="fa fa-envelope fa-1x " style="color:#8ac400"></i>
	                                            <span style="color: black"><a href="mailto:sale.24hstore@gmail.com">sale.24hstore@gmail.com</a></span>
	                                        </li>
	                                    </ul>
	                                </div> -->
	           
	     </div>
	</div>

</section>