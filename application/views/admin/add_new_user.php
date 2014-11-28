

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
		<section id="container">
			<section id="main-content">
			  <section class="wrapper">
				<h3><i class="fa fa-angle-right"></i> Add New User</h3>
				<!-- BASIC FORM ELELEMNTS -->
					<div class="row mt">
						<div class="col-lg-12">
						  <div class="form-panel">
							  <h4 class="mb"><i class="fa fa-angle-right"></i> All Fields are Required.</h4>
							  <?php $attribute = array('class' => 'form-horizontal style-form'); ?>
							  <?php echo form_open('verifyuser',$attribute); ?>
								  <div class="form-group">
									<?php
										if (!empty(form_error('username')))
										{
											echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.form_error('username').'</div>';
										}
									?>
									  <label class="col-sm-2 col-sm-2 control-label" for="username">Username</label>
									  <div class="col-sm-10">
										  <input type="text" name="username" class="form-control" placeholder="Username" id="username" autofocus>
									  </div>
								  </div>
								  <div class="form-group">
									<?php
										if (!empty(form_error('password')))
										{
											echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.form_error('password').'</div>';
										}
									?>
									  <label class="col-sm-2 col-sm-2 control-label" for="password">Password</label>
									  <div class="col-sm-10">
										 <input type="password" name="password" class="form-control" placeholder="Password" id="password">
									  </div>
								  </div>
								  <div class="form-group">
									<?php
										if (!empty(form_error('email')))
										{
											echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.form_error('email').'</div>';
										}
									?>
									  <label class="col-sm-2 col-sm-2 control-label" for="email">Email</label>
									  <div class="col-sm-10">
										  <input type="text" name="email" class="form-control" placeholder="Email" id="email">
									  </div>
								  </div>
								  <div class="form-group">
									<?php
										if (!empty(form_error('contact')))
										{
											echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.form_error('contact').'</div>';
										}
									?>
									  <label class="col-sm-2 col-sm-2 control-label" for="contact">Contact</label>
									  <div class="col-sm-10">
										  <input type="text" name="contact" class="form-control" placeholder="Contact Number" id="contact">
									  </div>
								  </div>
								  <div class="form-group">
										<label class="col-lg-2 col-sm-2 control-label">&nbsp;</label>
										<div class="col-lg-10">
											<button class="btn btn-theme" type="submit">Submit</button>
										</div>
								  </div>
							  </form>
						  </div>
						</div><!-- col-lg-12-->      	
					</div><!-- /row -->
				</section>
			</section>
		</section>
   <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.backstretch.min.js"></script>
    <script>
       // $.backstretch("<?php echo base_url(); ?>img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
