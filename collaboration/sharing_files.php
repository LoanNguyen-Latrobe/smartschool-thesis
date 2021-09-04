<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_students.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid" data-select2-id="9">
		<div class="row align-items-center" data-select2-id="8">
			<div class="col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main/index_students.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="group_detail.php">Group Detail</a></li>
					</ol>
				</nav>
				<h4 class="breadcrumb-title">Lessons</h4>
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
							<h5 class="card-title mb-0">Group detail</h5>
						</div>
 						<div class="card-body">
							<div class="filter-widget">
								<h6><b>Group name</b></h6>
								<textarea class="form-control" rows="1" disabled="">PHP-PRO-21-01</textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Members</b></h6>
								<textarea class="form-control" rows="1" disabled="">2</textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Started date</b></h6>
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

					                <a href="lessons_detail_mentor.php" class="btn btn-secondary btn-block"><i class="fas fa-plus"> Add new lesson</i></a>

								<div class="table-responsive">
									<table class="table table-hover table-center mb-0">
										<thead>
											<tr class="thead-light">
												<th>#</th>
												<th>LESSONS</th>
												<th class="text-left">CREATED DATE</th>
												<th class="text-left">ACTIONS</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>
													<a href="lessons.php">Introducing PHP</a>
												</td>
												<td>10 September 2021</td>
												<td>
		                      						<a href="lesson_detail.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<a href="lessons.php">Configuring Your Environment</a>
												</td>
												<td>10 September 2021</td>
												<td>
		                      						<a href="lesson_detail.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>
													<a href="lessons.php">PHP Basics</a>
												</td>
												<td>10 September 2021</td>
												<td>
		                      						<a href="lesson_detail.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>
													<a href="lessons.php">Functions</a>
												</td>
												<td>10 September 2021</td>
												<td>
		                      						<a href="lesson_detail.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>
													<a href="lessons.php">Arrays</a>
												</td>
												<td>10 September 2021</td>
												<td>
		                      						<a href="lesson_detail.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>
													<a href="lessons.php">Object-Oriented PHP</a>
												</td>
												<td>10 September 2021</td>
												<td>
		                      						<a href="lesson_detail.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
												</td>
											</tr>
											<tr>
												<td>7</td>
												<td>
													<a href="lessons.php">Advanced OOP Features</a>
												</td>
												<td>10 September 2021</td>
												<td>
		                      						<a href="lesson_detail.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
												</td>
											</tr>
											<tr>
												<td>8</td>
												<td>
													<a href="lessons.php">Error and Exception Handling</a>
												</td>
												<td>10 September 2021</td>
												<td>
		                      						<a href="lesson_detail.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
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