<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-4 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../main/index_student.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="group_list.php">Groups</a></li>
				</ol>
				</nav>
				<h4 class="breadcrumb-title">Group detail</h4>
			</div>
			<div class="col-md-8 col-12">
				<div class="btn-toolbar d-flex float-right" role="toolbar" aria-label="Toolbar with button groups">
				  <div class="btn-group mr-2" role="group" aria-label="First group">
						<a data-toggle="modal" data-target=".request_join" class="btn btn-warning">2 Requests</a>
				  </div>
				  <div class="btn-group mr-2" role="group" aria-label="Second group">
						<a href="sharing_files.php" class="btn btn-outline-secondary w-100">Sharing files</a>
						<a href="discussion.php" class="btn btn-outline-secondary w-100">Discussion</a>
						<a href="appointment_mentors.php" class="btn btn-outline-secondary w-100">Appointments</a>
				  </div>
				</div>

				<div class="btn-group d-flex" role="group">
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
			        <h4>Members</h4>
			  </div>
				<div class="card card-table">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0">
								<thead>
									<tr class="thead-light">
										<th>#</th>
										<th>MEMBERS</th>
										<th class="text-left">COURSES</th>
										<th class="text-left">ACTIONS</th>
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
										</td>
										<td>DT22</td>
										<td>
                      <a href="view_member_contribution.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <a data-toggle="modal" href="#edit_member" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>
											<h2 class="table-avatar">
												<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_2.png" alt="User Image"></a>
												<a href="profile.html">Julie Pennington <span>julie@adobe.com</span></a>
											</h2>
										</td>
										<td>DT21</td>
										<td>
                      <a href="view_member_contribution.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <a data-toggle="modal" href="#edit_member" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>
											<h2 class="table-avatar">
												<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_3.jpg" alt="User Image"></a>
												<a href="profile.html">Allen Davis <span>allendavis@adobe.com</span></a>
											</h2>
										</td>
										<td>DC35</td>
										<td>
                      <a href="view_member_contribution.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <a data-toggle="modal" href="#edit_member" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>
											<h2 class="table-avatar">
												<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_4.jpg" alt="User Image"></a>
												<a href="profile.html">Patricia Manzi <span>patriciamanzi@adobe.com</span></a>
											</h2>
										</td>
										<td>D54</td>
										<td>
                      <a href="view_member_contribution.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <a data-toggle="modal" href="#edit_member" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>
											<h2 class="table-avatar">
												<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_5.png" alt="User Image"></a>
												<a href="profile.html">Olive Lawrence <span>olivelawrence@adobe.com</span></a>
											</h2>
										</td>
										<td>DX19</td>
										<td>
                      <a href="view_member_contribution.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <a data-toggle="modal" href="#edit_member" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-remove"></span></button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="float-right">
  						<div class="mt-auto p-2 bd-highlight">
	  						<a href="create_group.php" class="btn btn-info">
	          			<span class="glyphicon glyphicon-plus-sign"></span> Add Members
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
								<div class="col-12">
									<div class="form-group">
										<label>Team leader</label>
										<textarea class="form-control" rows="1" disabled="" style="resize:none;"></textarea>
									</div>
									<div class="form-group">
										<label>Major</label>
										<textarea class="form-control" rows="1" disabled="" style="resize:none;"></textarea> 
									</div>
								</div>

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
										<textarea class="form-control" rows="1"></textarea>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" rows="3"></textarea> 
									</div>
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

<div class="modal fade request_join" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-lg">
    <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">REQUEST TO JOIN</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
					<div class="col-12">
						<div class="card card-table">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0">
										<thead>
											<tr class="thead-light">
												<th>#</th>
												<th>PEER</th>
												<th class="text-left">MAJOR</th>
												<th class="text-left">UNIT</th>
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
												</td>
												<td>Science</td>
												<td>DT22</td>
												<td>
					                <a href="group_detail_request.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-ok"></span></a> | <a data-toggle="modal" href="#decline-request" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
												</td>
											<tr>
												<td>2</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_2.png" alt="User Image"></a>
														 <a href="profile.html">Julie Pennington <span>julie@adobe.com</span></a>
													</h2>											
												</td>
												<td>Science</td>
												<td>DT21</td>
												<td>
					                <a href="group_detail_request.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-ok"></span></a> | <a data-toggle="modal" href="#decline-request" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_3.jpg" alt="User Image"></a>
														<a href="profile.html">Allen Davis <span>allendavis@adobe.com</span></a>
													</h2>
												</td>
												<td>Science</td>
												<td>DC35</td>
												<td>
					                <a href="group_detail_request.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-ok"></span></a> | <a data-toggle="modal" href="#decline-request" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="submit-section text-center">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
					</div>
				</div>
			</div>
		</div>
  </div>
</div>

<div class="modal fade custom-modal" id="decline-request">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
 			<div class="modal-header">
				<h5 class="modal-title">REASON DECLINING THE REQUEST</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="col-12">
						<div class="row form-row">
							<div class="col-12">
								<div class="form-group">
									<label>Reason</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="submit-section text-center">
						<button type="submit" class="btn btn-primary submit-btn">SAVE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade custom-modal" id="edit_member">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">ASSIGN MEMBERS ROLE</h5>
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
                          <img class="rounded-circle w-100" src="../images/users/user_1.png">
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
									  <option value="1">Leader</option>
									  <option value="2">Member</option>
									</select>
						  	</div>
							</div>
						</div>
					</div>
					<div class="submit-section text-center">
						<button type="submit" class="btn btn-primary submit-btn">SAVE</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
