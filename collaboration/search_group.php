<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid" data-select2-id="9">
		<div class="row align-items-center" data-select2-id="8">
			<div class="col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main/index_student.html">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Search Groups</li>
					</ol>
				</nav>
				<h4 class="breadcrumb-title">10 matches found</h4>
			</div>
		</div>
	</div>
</div>

<div class="content" style="transform: none; min-height: 577.625px;">
	<div class="container-fluid" style="transform: none;">
		<div class="row" style="transform: none;">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<form>
							<div class="row form-row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Major</label>
										<select class="form-select form-select-lg mb-1">
										  <option selected>Select one</option>
										  <option value="1">Information Technology</option>
										  <option value="2">Science</option>
										  <option value="3">Economy</option>
										  <option value="4">Politics</option>
										  <option value="5">Language</option>
										</select>
									</div>

									<div class="form-group">
										<label>Start date </label>
										<div class="input-group date" id='startdatepicker'>
							               <input type='text' class="form-control" />
								           <span class="input-group-addon">
								           <span class="glyphicon glyphicon-calendar"></span>
								           </span>
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

								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Goal</label>
										<select class="form-select form-select-lg mb-1">
										  <option selected>Select one</option>
										  <option value="1">Beginner</option>
										  <option value="2">Intermediate</option>
										  <option value="3">Professional</option>
										</select>
									</div>
									<div class="form-group">
										<label>End date </label>
										<div class="input-group date" id='enddatepicker'>
							               <input type='text' class="form-control" />
								           <span class="input-group-addon">
								           	<span class="glyphicon glyphicon-calendar"></span>
								           </span>
								  		</div>
									</div>
								      <script type="text/javascript">
								         $(function () {
								             $('#enddatepicker').datetimepicker(
								             	{
								             		format: 'yyyy-mm-dd',
								             		todayBtn: true,
								             		todayHighlight: true,
								             		autoclose: true,
								         		    minView: 2						
								             	});
								         });
								      </script>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Number of members</label>
										<textarea class="form-control" rows="1"></textarea>
									</div>
									<div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 80px;">
					  					<div class="mt-auto p-2 bd-highlight">
											<button type="button" class="btn btn-secondary float-right">Filter</button>
						  				</div>
									</div>
								</div>
							</div>
						</form>
						
						<div class="row form-row">
							<div class="col-12 col-md-12">
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
													<th>ACTION</th>
													</tr>
												</thead>
												<tbody>
												<tr>
													<td>1</td>
													<td>LG-INTER-21-01</td>
													<td>5</td>
													<td>Intermediate level in English</td>
													<td>10 April 2021</td>
													<td>
														<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>LG-INTER-20-10</td>
													<td>4</td>
													<td>Fluency English speaking</td>
													<td>02 October 2020</td>
													<td>
														<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>LG-INTER-21-03</td>
													<td>3</td>
													<td>Intermediate writing in English</td>
													<td>20 March 2021</td>
													<td>
														<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>LG-INTER-21-01</td>
													<td>2</td>
													<td>Academic English writing</td>
													<td>25 January 2021</td>
													<td>
														<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>LG-INTER-20-11</td>
													<td>5</td>
													<td>Intermediate level in Japanese</td>
													<td>20 November 2020</td>
													<td>
														<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
													</td>
												</tr>
												<tr>
													<td>6</td>
													<td>LG-INTER-21-01</td>
													<td>2</td>
													<td>Intermediate level in English</td>
													<td>08 April 2020</td>
													<td>
														<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
													</td>
												</tr>
												<tr>
													<td>7</td>
													<td>LG-INTER-21-01</td>
													<td>2</td>
													<td>Intermediate level in English</td>
													<td>08 April 2020</td>
													<td>
														<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
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
	</div>
</div>

<?php require('../components/footer.php'); ?>
