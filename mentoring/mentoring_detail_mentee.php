<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-5 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../main/index_student.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="mentee_dashboard.php">Mentoring</a></li>
				</ol>
				</nav>
				<h4 class="breadcrumb-title">Mentoring detail</h4>
			</div>
			<div class="col-md-7 col-12">
				<div class="btn-group d-flex" role="group">
					<a href="lessons_mentee.php" class="btn btn-outline-secondary w-100">Lessons</a>
					<a href="assessments.php" class="btn btn-outline-secondary w-100">Assessments</a>
					<a href="sharing_file.php" class="btn btn-outline-secondary w-100">Sharing files</a>
					<a href="discussion_mentee.php" class="btn btn-outline-secondary w-100">Discussion</a>
					<a href="appointments.php" class="btn btn-outline-secondary w-100">Appointment</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="mentor_list" class="content">
  <div class="container-fluid">
	  <div class="section-title">
	        <h4>Mentors</h4>
	  </div>
		<div class="row">
			<div class="col-sm-3 col-md-2 col-xl-3">
				<div class="profile-widget">
					<div class="user-avatar">
						<a href="profile.html">
							<img class="img-fluid" alt="User Image" src="../images/users/user_7.png">
						</a>
					</div>
					<div class="pro-content">
						<h3 class="title">
							<a href="profile.html">Ruby Perrin</a>
							<i class="fas fa-check-circle verified"></i>
						</h3>
						<p class="speciality">Professor</p>
						<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="d-inline-block average-rating">(35)</span>
						</div>
						<ul class="available-info">
							<li><i class="fas fa-building"></i> Department of Science</li>
							<li><i class="fa fa-phone"></i> 111.2222.333</li>
							<li>
								<a href="mailto:rubyPerrin@gmail.com" target="_blank" class="far fa-envelope"> rubyPerrin@gmail.com</a>							
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-sm-3 col-md-2 col-xl-3">
				<div class="profile-widget">
					<div class="user-avatar">
						<a href="profile.html">
							<img class="img-fluid" alt="User Image" src="../images/users/user_7.png">
						</a>
					</div>
					<div class="pro-content">
						<h3 class="title">
							<a href="profile.html">Ruby Perrin</a>
							<i class="fas fa-check-circle verified"></i>
						</h3>
						<p class="speciality">Associate Professor</p>
						<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="d-inline-block average-rating">(17)</span>
						</div>
						<ul class="available-info">
							<li><i class="fas fa-building"></i> Department of Science</li>
							<li><i class="fa fa-phone"></i> 111.2222.333</li>
							<li>
								<a href="mailto:rubyPerrin@gmail.com" target="_blank" class="far fa-envelope"> rubyPerrin@gmail.com</a>							
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-2 col-xl-3">
				<div class="profile-widget">
					<div class="user-avatar">
						<a href="profile.html">
							<img class="img-fluid" alt="User Image" src="../images/users/user_7.png">
						</a>
					</div>
					<div class="pro-content">
						<h3 class="title">
							<a href="profile.html">Ruby Perrin</a>
							<i class="fas fa-check-circle verified"></i>
						</h3>
						<p class="speciality">Senior Lecturer</p>
						<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="d-inline-block average-rating">(20)</span>
						</div>
						<ul class="available-info">
							<li><i class="fas fa-building"></i> Department of Science</li>
							<li><i class="fa fa-phone"></i> 111.2222.333</li>
							<li>
								<a href="mailto:rubyPerrin@gmail.com" target="_blank" class="far fa-envelope"> rubyPerrin@gmail.com</a>							
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="detail" class="content" style="transform: none;">
  <div class="container-fluid" style="transform: none;">
  	<div class="row" style="transform: none;">
			<div class="col-md-8 col-lg-7 col-xl-6" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
			  <div class="section-title">
			        <h4>Mentees</h4>
			  </div>
				<div class="card card-table">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0">
								<thead>
									<tr class="thead-light">
										<th>#</th>
										<th>MENTEE</th>
										<th class="text-left">CLASS</th>
										<th class="text-left">ACTION</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
											<div class="progress">
  											<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
											</div>
										</td>
										<td>DT22</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_2.png" alt="User Image"></a>
											 <a href="profile.html">Julie Pennington <span>julie@adobe.com</span></a>
											</h2>
											<div class="progress">
  											<div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">10%</div>
											</div>
										</td>
										<td>DT21</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_3.jpg" alt="User Image"></a>
											<a href="profile.html">Allen Davis <span>allendavis@adobe.com</span></a>
											</h2>
											<div class="progress">
  											<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
											</div>
										</td>
										<td>DC35</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_4.jpg" alt="User Image"></a>
											<a href="profile.html">Patricia Manzi <span>patriciamanzi@adobe.com</span></a>
											</h2>
											<div class="progress">
  											<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
											</div>
										</td>
										<td>D54</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_5.png" alt="User Image"></a>
											<a href="profile.html">Olive Lawrence <span>olivelawrence@adobe.com</span></a>
											</h2>
											<div class="progress">
  											<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
											</div>
										</td>
										<td>DX19</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_6.png" alt="User Image"></a>
											<a href="profile.html">Frances Foster <span>frances@adobe.com</span></a>
											</h2>
											<div class="progress">
  											<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
											</div>
										</td>
										<td>DH20</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
										</td>
									</tr>
									<tr>
										<td>7</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_7.png" alt="User Image"></a>
											<a href="profile.html">Deloris Briscoe <span>delorisbriscoe@adobe.com</span></a>
											</h2>
											<div class="progress">
  											<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
											</div>
										</td>
										<td>D48</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>


  		<div class="col-md-4 col-lg-5 col-xl-6">
			  <div class="section-title">
			    <h4>Details</h4>
			  </div>
			  <div class="card">
			  	<div class="card-body">
						<form>
							<div class="row form-row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>Start date </label>
										<div class="input-group date" id='startdatepicker'>
			               <input type='text' class="form-control" disabled="" />
				               <span class="input-group-addon">
				               <span class="glyphicon glyphicon-calendar"></span>
				               </span>
				           </div>
				        	</div>
				     		</div>
				      <script type="text/javascript">
				         $(function () {
				             $('#startdatepicker').datetimepicker(
				             	{
				             		format: 'yyyy-mm-dd',
				             		todayBtn: true,
				             		todayHighlight: true,
				             		autoclose: true,
				         		    minView: 2						
				             	});
				         });
				      </script>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>Finish date </label>
										<div class="input-group date" id='finishdatepicker'>
			               <input type='text' class="form-control" disabled="" />
				               <span class="input-group-addon">
				               <span class="glyphicon glyphicon-calendar"></span>
				               </span>
				           </div>
				        	</div>
				     		</div>
				      <script type="text/javascript">
				         $(function () {
				             $('#finishdatepicker').datetimepicker(
				             	{
				             		format: 'yyyy-mm-dd',
				             		todayBtn: true,
				             		todayHighlight: true,
				             		autoclose: true,
				         		    minView: 2						
				             	});
				         });
				      </script>
								<div class="col-12">
									<div class="form-group">
										<label>Goal</label>
										<textarea class="form-control" disabled=""></textarea>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" rows="5" disabled=""></textarea> 
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('../components/footer.php'); ?>
