<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid" data-select2-id="9">
		<div class="row align-items-center" data-select2-id="8">
			<div class="col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main/index_teacher.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="mentee_dashboard.php">Mentoring</a></li>
					</ol>
				</nav>
				<h4 class="breadcrumb-title">Request List</h4>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card card-table">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover table-center mb-0">
						<thead>
							<tr class="thead-dark">
								<th>#</th>
								<th>MENTORS</th>
								<th>GOAL</th>
								<th>REQUESTED DATE</th>
								<th>STATUS</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>
								<h2 class="table-avatar">
								<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_7.png" alt="User Image"></a>
								<a href="profile.html">David Thompson<span>davidThompson@added.com</span></a>
								</h2>
							</td>
							<td>Learning Web Development</td>
							<td>31 August 2021</td>
							<td class="text-center"><span class="pending">PENDING</span></td>
							<td>
         						<a data-toggle="modal" href="#view-request" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>
								<h2 class="table-avatar">
								<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_6.png" alt="User Image"></a>
								<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
								</h2>
							</td>
							<td>Intermediate writing in English</td>
							<td>15 August 2021</td>
							<td class="text-center"><span class="decline">DECLINED</span></td>
							<td>
         						<a data-toggle="modal" href="#view-request" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
							</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('../components/footer.php'); ?>

<div class="modal fade custom-modal" id="view-request">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">REQUEST DETAIL</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">??</span>
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
				                                <img class="rounded-circle w-100" src="../images/users/user_7.png">
				                            </div>
				                            <div>
				                                <h3 class="h5 font-weight-bold mb-0">David Thompson</h3>
				                                <div class="mb-3" tabindex="-1">
				                                 davidThompson@added.com
				                                </div>
				                            </div>
			                            </div>
			                        </a>
			                        </header>
	                            </div>
							</div>
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
						</div>
					</div>
					<div class="submit-section text-center">
						<button type="submit" class="btn btn-primary submit-btn">SAVE</button>
						<button type="submit" class="btn btn-secondary submit-btn">CLOSE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade custom-modal" id="view-request-decline">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
 			<div class="modal-header">
				<h5 class="modal-title">DECLINED REQUEST</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">??</span>
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
			                                <img class="rounded-circle w-100" src="../images/users/user_6.png">
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
						<div class="col-12">
							<div class="form-group">
								<label>Reason</label>
								<textarea class="form-control" rows="3" disabled=""></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="submit-section text-center">
					<button type="submit" class="btn btn-secondary submit-btn">CLOSE</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
