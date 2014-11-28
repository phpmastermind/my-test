 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url(); ?>img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $username; ?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="<?php echo site_url(); ?>/admin">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>FI Management</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="admin/general">General</a></li>
                          <li><a  href="admin/buttons">Buttons</a></li>
                          <li><a  href="admin/panels">Panels</a></li>
                      </ul>-->
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>User Management</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="calendar.php">Calendar</a></li>
                          <li><a  href="gallery.php">Gallery</a></li>
                          <li><a  href="todo_list.php">Todo List</a></li>
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>MIS</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.php">Login</a></li>
                          <li><a  href="lock_screen.php">Lock Screen</a></li>
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Roles & Permissions</span>
                      </a>
                     <!-- <ul class="sub">
                          <li><a  href="form_component.php">Form Components</a></li>
                      </ul>-->
                  </li>
                <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>User Management</span>
                      </a>
                      <ul class="sub">
                          <li><a href="<?php echo site_url(); ?>/admin/list_user">List User</a></li>
                          <li><a href="<?php echo site_url(); ?>/admin/add_new_user">Add User</a></li>
                      </ul>
                  </li>
                 <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.php">Morris</a></li>
                          <li><a  href="chartjs.php">Chartjs</a></li>
                      </ul>
                  </li>-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>