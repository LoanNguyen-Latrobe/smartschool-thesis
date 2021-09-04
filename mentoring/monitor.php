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
				<h4 class="breadcrumb-title">Learning process</h4>
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
		                        <header class="mb-2 header row d-flex">
		                            <div class="mr-3" style="width: 60px; padding-left: 10px;">
		                                <img class="rounded-circle w-100" src="../images/users/user_2.png">
		                            </div>
		                            <div class="d-flex flex-column">
		                                <h3 class="h5 font-weight-bold mb-0">Tyrone Roberts</h3>
		                                <div class="mb-3" tabindex="-1">DT22</div>
		                            </div>
		                        </header>
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
								</div>
							</div>

							<div class="table-responsive">
								<table class="table table-hover table-center mb-0">
									<thead>
										<tr class="thead-light">
											<th>#</th>
											<th>LESSONS</th>
											<th class="text-left">DUE DATE</th>
											<th class="text-center">STATUS</th>
											<th class="text-center">RESULT</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>
												<a href="lessons.php">Begining PHP and MySQL</a>
											</td>
											<td>10 September 2021</td>
											<td class="text-center">
						                     	<span class="glyphicon glyphicon-ok btn-sm btn-success"></span>
											</td>
											<td class="text-center">100%</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<a href="lessons.php">Begining PHP and MySQL</a>
											</td>
											<td>10 September 2021</td>
											<td class="text-center">
						                     	<span class="glyphicon glyphicon-ok btn-sm btn-success"></span>
											</td>
											<td class="text-center">100%</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												<a href="lessons.php">Begining PHP and MySQL</a>
											</td>
											<td>10 September 2021</td>
											<td class="text-center">
						                     	<span class="glyphicon glyphicon-ok btn-sm btn-success"></span>
											</td>
											<td class="text-center">100%</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												<a href="lessons.php">Begining PHP and MySQL</a>
											</td>
											<td>10 September 2021</td>
											<td class="text-center">
						                     	<span class="glyphicon glyphicon-remove btn-sm btn-warning"></span>
											</td>
											<td class="text-center">50%</td>
										</tr>
										<tr>
											<td>5</td>
											<td>
												<a href="lessons.php">Begining PHP and MySQL</a>
											</td>
											<td>10 September 2021</td>
											<td class="text-center">
						                     	<span class="glyphicon glyphicon-remove btn-sm btn-danger"></span>
											</td>
											<td class="text-center">0%</td>
										</tr>
										<tr>
											<td>6</td>
											<td>
												<a href="lessons.php">Begining PHP and MySQL</a>
											</td>
											<td>10 September 2021</td>
											<td class="text-center">
						                     	<span class="glyphicon glyphicon-remove btn-sm btn-danger"></span>
											</td>
											<td class="text-center">0%</td>
										</tr>
									</tbody>
								</table>

								<table class="table table-hover table-center mb-0">
									<thead>
										<tr class="thead-light">
											<th>#</th>
											<th>ASSESSMENTS</th>
											<th class="text-left">DUE DATE</th>
											<th class="text-center">STATUS</th>
											<th class="text-center">RESULT</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>
												<a href="lessons.php">ASSESSMENTS 1</a>
											</td>
											<td>10 September 2021</td>
											<td class="text-center">
						                     	<span class="glyphicon glyphicon-ok btn-sm btn-success"></span>
											</td>
											<td class="text-center">100%</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<a href="lessons.php">ACTIVITIES 1</a>
											</td>
											<td>10 September 2021</td>
											<td class="text-center">
						                     	<span class="glyphicon glyphicon-remove btn-sm btn-danger"></span>
											</td>
											<td class="text-center">0%</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												<a href="lessons.php">ACTIVITIES 2</a>
											</td>
											<td>10 September 2021</td>
											<td class="text-center">
						                     	<span class="glyphicon glyphicon-remove btn-sm btn-danger"></span>
											</td>
											<td class="text-center">0%</td>
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


<?php include ('../components/footer.php'); ?>