<body>
  <section id="container" >
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Delete User</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
					<div class="form-panel">
						  <h4 class="mb"><i class="fa fa-angle-right"></i> Confirm Delete User.</h4>
						  <?php $attribute = array('class' => 'form-horizontal style-form'); ?>
						  <?php echo form_open('deleteuser',$attribute); ?>
							<input type="hidden" value="<?php echo $users ?>" name="id" />
							  <div class="form-group">
									<label class="col-lg-2 col-sm-2 control-label">&nbsp;</label>
									<div class="col-lg-10">
										<button class="btn btn-theme" type="submit">Delete</button>
									</div>
							  </div>
						</form>
					</div>
          		</div>
          	</div>
			
		</section><!-- /wrapper -->
      </section><!-- /MAIN CONTENT -->
  </section>
 </body>