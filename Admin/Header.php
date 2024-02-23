<?php	include 'Config.php'?>

<div class="wrapper">
	<!-- <div id="loader"></div> -->

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="Dashboard.php" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo"><img src="QANUN-Logo.png" alt="logo"></span>
			  <span class="dark-logo"><img src="QANUN-Logo.png" alt="logo"></span>
		  </div>
		</a>	
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>

			
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">

						<form method="post">
							<div class="input-group">
								<input class="form-control mr-sm-2" type="search" name="search"  placeholder="Search Lawyers" aria-label="Search">
								<div class="input-group-append">
									<button class="btn" type="submit" id="button-addon3" name="srch" value="Search"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">			
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-primary-light" title="Full Screen">
					<i class="icon-Position"></i>
			    </a>
			</li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="Notifications">
			  <i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">
			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>
			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>			  
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect full-screen waves-light btn-primary-light">
			  	<i class="icon-Settings1"><span class="path1"></span><span class="path2"></span></i>
			  </a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
		<div class="user-profile bb-1 px-20 py-10">
			<div class="d-block text-center">			
				<div class="image">
				  <img src="assets/images/avatar/avatar-13.png" class="avatar avatar-xxl bg-primary-light rounded100" alt="User Image">
				</div>
				
				<div class="info pt-15">
					<a class="px-20 fs-18 fw-500" href="Admin-Profile.php?id=<?php echo $_SESSION["A_ID"];?>">
						<?php echo $_SESSION["A_Name"];?>
					</a>
				</div>
			</div>
			<ul class="list-inline profile-setting mt-20 mb-0 d-flex justify-content-center gap-3">
				<li><a href="logout.php" data-bs-toggle="tooltip" title="Logout"><i class="icon-Lock-overturning fs-24"><span class="path1"></span><span class="path2"></span></i></a></li>
			</ul>
	    </div>
		<div class="multinav">
			<div class="multinav-scroll" style="height: 100%;">	
				<!-- sidebar menu-->
				<ul class="sidebar-menu" data-widget="tree">				
					<li>
						<a href="Dashboard.php">
							<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="treeview">
					  <a href="#">
						<i class="icon-Hummer"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
						<span>Admin</span>
						<span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li>
							<a href="AdminList.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Admin List</a>
						</li>
						<li>
							<a href="AdminAdd.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Admin Add</a>
						</li>
					  </ul>
					</li>
					<li class="treeview">
					  <a href="#">
						<i class="icon-Hummer"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
						<span>Lawyers</span>
						<span class="pull-right-container">
						  <i class="fa fa-angle-right pull-right"></i>
						</span>
					  </a>
					  <ul class="treeview-menu">
						<li>
							<a href="Lawyers.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lawyer</a>
						</li>
						<li>
							<a href="Cases.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cases</a>
						</li>
					  </ul>
					</li>
					<li>
						<a href="appointments.php">
							<i class="icon-Barcode-read"><span class="path1"></span><span class="path2"></span></i>
							<span>Appointments</span>
						</a>
					</li>
					<li>
						<a href="Users.php">
							<i class="icon-Barcode-read"><span class="path1"></span><span class="path2"></span></i>
							<span>Users</span>
						</a>
					</li>
			
							</li>
						</ul>
					</li>					
				
					
				  </ul>
				</li>	 
			
			  </ul>
			  
			  <div class="sidebar-widgets">
				<div class="copyright text-center m-25">
					<p><strong class="d-block">QANUN Dashboard</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>