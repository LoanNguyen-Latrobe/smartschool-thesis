<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid" data-select2-id="9">
		<div class="row align-items-center" data-select2-id="8">
			<div class="col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main/index_student.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="mentee_dashboard.php">Mentoring</a></li>
					</ol>
				</nav>
				<h4 class="breadcrumb-title">Assessments</h4>
			</div>
		</div>
	</div>
</div>


<div class="content" style="transform: none; min-height: 577.625px;">
	<div class="container-fluid" style="transform: none;">
		<div class="row" style="transform: none;">
			<div class="col-md-5 col-lg-4 col-xl-4 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
				<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
					<div class="card search-filter">
						<div class="card-header">
							<h5 class="card-title mb-0">Mentoring detail</h5>
						</div>
 						<div class="card-body">
							<div class="filter-widget">
								<h6><b>Group name</b></h6>
								<textarea class="form-control" rows="1" disabled="">PHP-PRO-21-01</textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Number of mentees</b></h6>
								<textarea class="form-control" rows="1" disabled="">2</textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Created date</b></h6>
								<textarea class="form-control" rows="1" disabled="">08 April 2020</textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Goal</b></h6>
								<textarea class="form-control" rows="2" disabled="">Learn how to build maintainable and secure applications</textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Desciption</b></h6>
								<textarea class="form-control" rows="7" disabled="">Write clean and maintainable object-oriented code.&#13;&#10;Start a new project from scratch.&#13;&#10;Implement a layered architecture.&#13;&#10;Protect your application from XSS, CSRF and other attacks.</textarea>
							</div>							
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-7 col-lg-8 col-xl-8">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">

								<div class="table-responsive">
									<table class="table table-hover table-center mb-0">
										<thead>
											<tr class="thead-light">
												<th>#</th>
												<th>ASSESSMENT</th>
												<th class="text-left">DESCRIPTION</th>
												<th class="text-left">WEIGHTING</th>
												<th class="text-left">TIME</th>
												<th class="text-left">ACTION</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>
													<a href="lessons.php">Assessment 1- Simple web application on git</a>
												</td>
												<td></td>
												<td>10%</td>
												<td>Start Week 5. Due Week 7</td>
												<td>
		                      						<a href="lessons_detail_mentee.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<a href="lessons.php">Assessment 2- Developing Front-end and back-end</a>
												</td>
												<td></td>
												<td>30%</td>
												<td>Start Week 8. Due Week 11</td>
												<td>
		                      						<a href="lessons_detail_mentee.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>
													<a href="lessons.php">Assessment 3- One 2-hour examination</a>
												</td>
												<td></td>
												<td>60%</td>
												<td>End of semester</td>
												<td>
		                      						<a href="lessons_detail_mentee.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
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
		</div>
	</div>
</div>

<?php include ('../components/footer.php'); ?>
