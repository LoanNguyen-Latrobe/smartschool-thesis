<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid" data-select2-id="9">
		<div class="row align-items-center" data-select2-id="8">
			<div class="col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main/index_student.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="group_list.php">Groups</a></li>
					</ol>
				</nav>
				<h4 class="breadcrumb-title">My Requests List</h4>
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
								<th>GROUP</th>
								<th>MAJOR</th>
								<th>GOAL</th>
								<th>MEMBERS</th>
								<th>REQUESTED DATE</th>
								<th>STATUS</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>IT-PRAC-21-09</td>
								<td>Information Technology</td>
								<td>Learning PHP Programing Language</td>
								<td>10</td>
								<td>10 December 2021</td>
								<td class="text-center"><span class="pending">PENDING</span></td>
								<td>
	         						<a data-toggle="modal" href="#view-request" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>INT-ENG-21-01</td>
								<td>Language</td>
								<td>Improve speaking</td>
								<td>5</td>
								<td>08 April 2020</td>
								<td class="text-center"><span class="pending">PENDING</span></td>
								<td>
	         						<a data-toggle="modal" href="#view-request" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>IT-INT-21-10</td>
								<td>Information Technology</td>
								<td>Learning Web Development</td>
								<td>5</td>
								<td>08 October 2021</td>
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
								<div class="form-group">
									<label>Major</label>
									<textarea class="form-control" rows="1" style="resize: none;" disabled=""></textarea>
								</div>
								<div class="form-group">
									<label>Goal</label>
									<textarea class="form-control" rows="1" style="resize: none;" disabled=""></textarea>
								</div>
								<div class="form-row">
									<div class="col-6">
										<div class="form-group">
											<label>Start date</label>
											<textarea class="form-control" rows="1" style="resize: none;" disabled=""></textarea>
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label>Members</label>
											<textarea class="form-control" rows="1" style="resize: none;" disabled=""></textarea>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Team leader</label>
									<textarea class="form-control" rows="1" style="resize: none;" disabled=""></textarea>
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea class="form-control" rows="3" disabled=""></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="submit-section text-center">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
						<button type="reset" class="btn btn-danger" data-dismiss="modal">CANCEL REQUEST</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
