<body>
  <section id="container" >
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Users List</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
					<?php
						// for($x = 0; $x < count($users); $x++)
						// {
							// print_r($users).'<br />';
						// }
						$username = array();
						$email = array();
						$contact = array();
						$id = array();
						foreach($users as $key => $val)
						{
							$username[] = $val->username;
							$email[] = $val->email;
							$contact[] = $val->contact;
							$id[] = $val->id;
						}
						echo "<div class='span3' style='background:#fff;float:left;width:98%;padding:15px 1%;box-shadow:10px 10px 25px 1px #999;'>";
							echo "<h3 style='margin-bottom:0px;'>Total ".count($users)." Users<span style='float:right;margin-right:30px;'><a href=".site_url().'/admin/add_new_user'.">Add New User</a></span></h3>";
							echo "<p style='border-bottom:1px solid #eee;width:100%;float:left;margin-bottom:20px;'>";
								echo "<div style='width:25%;padding:5px;float:left;font-weight:bold;text-transform:capitalize;'>Username</div>";
								echo "<div style='width:25%;padding:5px;float:left;font-weight:bold;text-transform:capitalize;'>Email</div>";
								echo "<div style='width:25%;float:left;padding:5px;font-weight:bold;text-transform:capitalize;'>Contact</div>";
								echo "<div style='width:10%;float:left;padding:5px;font-weight:bold;text-transform:capitalize;'>Edit</div>";
								echo "<div style='width:10%;float:left;padding:5px;font-weight:bold;text-transform:capitalize;'>Delete</div>";
							echo "</p>";
							for ($x = 0; $x < count($username); $x++)
							{
								echo "<p style='border-bottom:1px solid #eee;width:100%;float:left;margin-bottom:20px;'>";
									echo "<div style='width:25%;padding:5px;float:left;text-transform:capitalize;'>".$username[$x]."</div>";
									echo "<div style='width:25%;padding:5px;float:left;'>".$email[$x]."</div>";
									echo "<div style='width:25%;float:left;padding:5px;'>".$contact[$x]."</div>";
									echo "<div style='width:10%;float:left;padding:5px;'><a href='edit_user?id=".$id[$x]."'><i class='fa fa-edit'></i></a></div>";
									echo "<div style='width:10%;float:left;padding:5px;'><a href='delete_user?id=".$id[$x]."'><i class='fa fa-trash-o'></i></a></div>";
								echo "</p>";
							}
						echo "</div>";
					?>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
  </section>
 </body>