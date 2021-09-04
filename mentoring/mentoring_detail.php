<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_teacher.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-5 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../main/ndex_teacher.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="mentor_dashboard.php">Mentoring</a></li>
				</ol>
				</nav>
				<h4 class="breadcrumb-title">Mentoring detail</h4>
			</div>
			<div class="col-md-7 col-12">
				<div class="btn-group d-flex" role="group">
					<a href="lessons_mentor.php" class="btn btn-outline-secondary w-100">Lessons</a>
					<a href="assessments.php" class="btn btn-outline-secondary w-100">Assessments</a>
					<a href="sharing_file_mentor.php" class="btn btn-outline-secondary w-100">Sharing files</a>
					<a href="discussion.php" class="btn btn-outline-secondary w-100">Discussion</a>
					<a href="appointment_mentors.php" class="btn btn-outline-secondary w-100">Appointments</a>
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
						<p class="speciality">Professor
							<br><b>Main Mentor</b>
						</p>
						<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<span class="d-inline-block average-rating">(35)</span>
						</div>
						<div class="d-flex justify-content-between">
							<div class="available-info">
								<li><i class="fas fa-building"></i> Department of Science</li>
								<li><i class="fa fa-phone"></i> 111.2222.333</li>
								<li>
									<a href="mailto:rubyPerrin@gmail.com" target="_blank" class="far fa-envelope"> rubyPerrin@gmail.com</a>							
								</li>
							</div>
							<div class="d-flex align-items-end flex-column bd-highlight mb-3">
			  				<div class="mt-auto p-2 bd-highlight">
         						<a data-toggle="modal" href="#edit_mentor" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-pencil"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
			  				</div>
							</div>
						</div>
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
						<p class="speciality">Senior Lecturer
							<br><b>Tutor</b>
						</p>
						<div class="rating">
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star filled"></i>
								<i class="fas fa-star"></i>
								<span class="d-inline-block average-rating">(20)</span>
						</div>
						<div class="d-flex justify-content-between">
							<div class="available-info">
								<li><i class="fas fa-building"></i> Department of Science</li>
								<li><i class="fa fa-phone"></i> 111.2222.333</li>
								<li>
									<a href="mailto:rubyPerrin@gmail.com" target="_blank" class="far fa-envelope"> rubyPerrin@gmail.com</a>							
								</li>
							</div>
							<div class="d-flex align-items-end flex-column bd-highlight mb-3">
			  				<div class="mt-auto p-2 bd-highlight">
         						<a data-toggle="modal" href="#edit_mentor" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-pencil"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
				        	</a>
			  				</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-3 col-md-3 col-xl-3">
				<div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 380px;">
  				<div class="mt-auto p-2 bd-highlight">
	  				<a href="match_group.php" class="btn btn-info">
	          	<span class="glyphicon glyphicon-plus-sign"></span> Add Mentors
	        	</a>
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
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
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
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
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
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
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
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
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
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="float-right">
  						<div class="mt-auto p-2 bd-highlight">
	  						<a href="match_group.php" class="btn btn-info">
	          			<span class="glyphicon glyphicon-plus-sign"></span> Add Mentees
	        			</a>
  						</div>
						</div>						

					</div>
				</div>
			</div>


  		<div class="col-md-4 col-lg-6 col-xl-6">
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
			               <input type='text' class="form-control" />
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
			               <input type='text' class="form-control" />
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
										<textarea class="form-control"></textarea>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" rows="5"></textarea> 
									</div>
								</div>

								<div class="col-12">
										<button type="submit" class="btn btn-outline-success">Save Changes</button>
										<button type="submit" class="btn btn-outline-secondary">Cancel</button>
										<button type="submit" class="btn btn-outline-danger">Delete</button>
										<button type="submit" class="btn btn-secondary float-right">CLOSE</button>
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

<div class="modal fade custom-modal" id="edit_mentor">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">ASSIGN MENTOR ROLE</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="col-12">
						<div class="row form-row">
							<div class="col-12">
                <div class="d-flex flex-column">
                <header class="mb-2 header row d-flex">
                   <a href="profile.html">
                    <div class="d-flex justify-content-start">
                      <div class="mr-3" style="width: 60px; padding-left: 10px;">
                          <img class="rounded-circle w-100" src="../images/users/user_2.png">
                      </div>
                      <div>
                          <h3 class="h5 font-weight-bold mb-0">Tyrone Roberts</h3>
                          <div class="mb-3" tabindex="-1">
                           tyroneroberts@adobe.com
                          </div>
                      </div>
                    </div>
               		 </a>
                </header>
                </div>
							</div>
							<div class="col-12">
						  	<div class="form-group">
									<label>Role</label>
									<select class="form-select form-select-lg mb-1">
									  <option selected>Select one</option>
									  <option value="1">Main mentor</option>
									  <option value="2">Tutor</option>
									</select>
						  	</div>
							</div>
						</div>
					</div>
					<div class="submit-section text-center">
						<button type="submit" class="btn btn-primary submit-btn">SAVE</button>
						<button type="cancel" class="btn btn-secondary cancel-btn">CANCEL</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>