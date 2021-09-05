<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid sticky-top">
		<a class="navbar-branch subpages" href="../index.php">
			<img src="../images/logo.png" height="50">
		</a>

		<ul class="nav navbar-nav mr-auto d-flex align-items-center">
		   <li class="bg-light">
		        <i class="fas fa-calendar-alt"></i>
		        <?php
		        $Today = date('y:m:d');
		        $new = date('l, F d, Y', strtotime($Today));
		        echo $new;
		        ?>
		    </li>
		    </div>

	        <!-- navbar_plugin_output -->
	        <li class="nav-item">
		        <i role="img" class="icon fa fa-bell fa-fw" title="Toggle notifications menu" aria-label="Toggle notifications menu"></i>
		    </li>
		    <li class="nav-item">
		    	<i role="img" class="icon fa fa-comment fa-fw" title="Toggle messaging drawer" aria-label="Toggle messaging drawer"></i>
		    </li>

	        <!-- user_menu -->
	        <li class="nav-item">
		        <i role="img" class="icon fa fa-user fa-fw" title="Toggle notifications menu" aria-label="Toggle notifications menu"></i>
	        </li>

		      <li class="nav-item dropdown">
		        <a class="nav-link nav-item-drop dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          </a>
		        <div class="dropdown-menu profile" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Profile</a>
		          <a class="dropdown-item" href="#">Setting</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Logout</a>
		        </div>
		      </li>
		</div>
	</div>
</nav>


<nav class="navbar navbar-menu navbar-expand-sm navbar-light">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
		data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="../main/index_student.php">HOME <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">CLASSES</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="../collaboration/group_list.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          GROUPS
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="../collaboration/group_list.php">Group List</a>
		          <a class="dropdown-item" href="../collaboration/search_group.php">Search Groups</a>
		          <a class="dropdown-item" href="../collaboration/create_group.php">Create New Group</a>
		          <a class="dropdown-item" href="../collaboration/peer_reviews.php">Peer Reviews</a>
		          <a class="dropdown-item" href="../collaboration/appointments.php">Appointments</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="../mentoring/mentee_dashboard.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          MENTORING
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="../mentoring/mentee_dashboard.php">Mentoring List</a>
		          <a class="dropdown-item" href="../mentoring/search_mentor.php">Search Mentors</a>
		          <a class="dropdown-item" href="../mentoring/appointments.php">Appointments</a>
		        </div>
		      </li>
		    </ul>
			<div class="form-group form-control-sm has-search my-2 my-lg-0">
		    	<span class="fa fa-search form-control-feedback"></span>
		    	<input type="text" class="form-control" placeholder="Search">
			</div>
	    </div>
	</div>
</nav>

