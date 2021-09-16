<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="content">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-lg-4 dash-board-list red">
			<div class="dash-widget">
				<div class="circle-bar">
					<div class="icon-col">
						<i class="fa fa-user-plus" aria-hidden="true"></i>
					</div>
				</div>
				<div class="dash-widget-info">
					<a href="my_requests.php">
						<h3>03</h3>
						<h6>My Requests</h6>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-4 dash-board-list blue">
			<div class="dash-widget">
				<div class="circle-bar">
					<div class="icon-col">
						<i class="fas fa-users"></i>
					</div>
				</div>
				<div class="dash-widget-info">
					<a href="request_group.php">
						<h3>2</h3>
						<h6>Group Requests</h6>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-4 dash-board-list yellow">
			<div class="dash-widget">
				<div class="circle-bar">
					<div class="icon-col">
						<i class="fas fa-calendar-check"></i>
					</div>
				</div>
				<div class="dash-widget-info">
					<a href="appointments.php"></a>
					<h3>33</h3>
					<h6>Appointments</h6>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h4 class="mb-4">Collaboration Group Lists</h4>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
		  <label class="form-check-label" for="inlineRadio1">All</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
		  <label class="form-check-label" for="inlineRadio2">Closed</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
		  <label class="form-check-label" for="inlineRadio3">Open</label>
		</div>
		<div class="card card-table">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover table-center mb-0">
						<thead>
							<tr class="thead-dark">
							<th>#</th>
							<th>GROUP NAME</th>
							<th>MEMBERS</th>
							<th>GOAL</th>
							<th>START DATE</th>
							<th class="text-center">STATUS</th>
							<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>IT-PHP-20-12</td>
							<td>5</td>
							<td>Basic of PHP Programming Language</td>
							<td>08 December 2020</td>
							<td class="text-center"><span class="accept">OPEN</span></td>
							<td class="text-center"><a href="group_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>LG-INTER-21-01</td>
							<td>2</td>
							<td>Intermediate level in English</td>
							<td>08 April 2020</td>
							<td class="text-center"><span class="accept">OPEN</span></td>
							<td class="text-center"><a href="group_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>IT-MYSQL-20-12</td>
							<td>5</td>
							<td>Basic of My SQL database</td>
							<td>08 Decemeber 2020</td>
							<td class="text-center"><span class="accept">OPEN</span></td>
							<td class="text-center"><a href="group_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>4</td>
							<td>LG-BEGIN-20-01</td>
							<td>8</td>
							<td>Basic level in English</td>
							<td>02 January2020</td>
							<td class="text-center"><span class="closed">CLOSED</span></td>
							<td class="text-center"><a href="group_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>5</td>
							<td>LG-INTER-21-01</td>
							<td>2</td>
							<td>Intermediate level in English</td>
							<td>08 April 2020</td>
							<td class="text-center"><span class="closed">CLOSED</span></td>
							<td class="text-center"><a href="group_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>6</td>
							<td>LG-INTER-21-01</td>
							<td>2</td>
							<td>Intermediate level in English</td>
							<td>08 April 2020</td>
							<td class="text-center"><span class="closed">CLOSED</span></td>
							<td class="text-center"><a href="group_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>7</td>
							<td>LG-INTER-21-01</td>
							<td>2</td>
							<td>Intermediate level in English</td>
							<td>08 April 2020</td>
							<td class="text-center"><span class="closed">CLOSED</span></td>
							<td class="text-center"><a href="group_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
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