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
					<a href="request_mentees.php">
						<h3>02</h3>
						<h6>Requests</h6>
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
					<h3>5</h3>
					<h6>Mentoring group</h6>
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
					<h3>10</h3>
					<h6>Appointments</h6>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h4 class="mb-4">Mentoring Group Lists</h4>
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
							<th>MENTEES</th>
							<th>GOAL</th>
							<th>CREATED DATE</th>
							<th class="text-center">STATUS</th>
							<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>LG-INTER-21-01</td>
							<td>2</td>
							<td>Intermediate speaking in English</td>
							<td>15 January 2020</td>
							<td class="text-center"><span class="accept">OPEN</span></td>
							<td class="text-center"><a href="mentoring_detail_mentee.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>LG-INTER-21-03</td>
							<td>5</td>
							<td>Academic English writing</td>
							<td>08 March 2020</td>
							<td class="text-center"><span class="accept">OPEN</span></td>
							<td class="text-center"><a href="mentoring_detail_mentee.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>IT-BASIC-21-07</td>
							<td>10</td>
							<td>Design a website using Bootstrap</td>
							<td>10 July 2020</td>
							<td class="text-center"><span class="accept">OPEN</span></td>
							<td class="text-center"><a href="mentoring_detail_mentee.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>4</td>
							<td>IT-BASIC-21-08</td>
							<td>7</td>
							<td>Use MySQL database</td>
							<td>08 August 2020</td>
							<td class="text-center"><span class="accept">OPEN</span></td>
							<td class="text-center"><a href="mentoring_detail_mentee.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>5</td>
							<td>LG-BASIC-20-09</td>
							<td>3</td>
							<td>English Grammar</td>
							<td>12 September 2020</td>
							<td class="text-center"><span class="closed">CLOSED</span></td>
							<td class="text-center"><a href="mentoring_detail_mentee.php" class="btn btn-sm bg-info-light">
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