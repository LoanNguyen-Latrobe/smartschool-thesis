<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_teacher.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid" data-select2-id="9">
		<div class="row align-items-center" data-select2-id="8">
			<div class="col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main/index_teacher.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="mentor_dashboard.php">Mentoring</a></li>
					</ol>
				</nav>
				<h4 class="breadcrumb-title">Matching Mentoring Group</h4>
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
								<div class="col-12 col-md-12">
									<div class="card-header" style="margin-bottom: 20px; background-color: #929494;">
										<h5 class="card-title mb-0">Search Mentors</h5>
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" value="">
									</div>
									<div class="form-group">
										<label>Expericence years</label>
										<select class="form-select form-select-lg mb-1">
										  <option selected>Select one</option>
										  <option value="1"><= 5 years</option>
										  <option value="2"><= 10 years</option>
										  <option value="3"><= 15 years</option>
										  <option value="3"><= 20 years</option>
										  <option value="3">> 20 years</option>
										</select>
									</div>
									<button type="button" class="btn btn-secondary">Filter</button>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Qualifications</label>
										<div class="list-group">
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Professor
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Asscociate Professor
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Doctor of philosophy
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Senior Lecture
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Master
										  </label>
										</div>
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label>Majors</label>
										<div class="list-group">
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Political Science
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Social Science
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Computer Science
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Economics
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">English Language and Literature
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Psychology
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Nursing
										  </label>
										  <label class="list-group-item">
										    <input class="form-check-input me-1" type="checkbox" value="">Communications
										  </label>
										</div>
									</div>
								</div>									
							</div>
						</form>
						
						<div class="row form-row">
						<div class="col-12 col-md-6">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0">
								<thead>
									<tr class="thead-light">
										<th>#</th>
										<th>MENTOR</th>
										<th class="text-left"><i class="fas fa-check"></i></th>
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
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>2</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>3</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>4</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>5</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col" ><input type="checkbox"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div>
						<div class="row-fluit">
							<button type="button" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i></button>
						</div>
						<div class="row-fluit">
							<button type="button" class="btn btn-secondary"><i class="fas fa-angle-double-left"></i></button>
						</div>
					</div>
				

					<div class="col-12 col-md-5">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0">
								<thead>
									<tr class="thead-light">
										<th>#</th>
										<th>MENTOR</th>
										<th class="text-left"><i class="fas fa-check"></i></th>
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
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>2</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>3</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>4</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			
				

				<div class="card-body">
					<form>
						<div class="row form-row">
							<div class="col-12 col-md-12">
								<div class="card-header" style="margin-bottom: 20px; background-color: #929494;">
									<h5 class="card-title mb-0">Search Mentees</h5>
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label>Class</label>
									<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-12 col-md-12">
								<button type="button" class="btn btn-secondary float-left">Filter</button>
							</div>
						</div>
					</form>

					<div class="row form-row">
						<div class="col-12 col-md-6">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0">
								<thead>
									<tr class="thead-light">
										<th>#</th>
										<th>MENTOR</th>
										<th class="text-left"><i class="fas fa-check"></i></th>
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
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>2</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>3</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>4</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>5</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col" ><input type="checkbox"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div>
						<div class="row-fluit">
							<button type="button" class="btn btn-secondary"><i class="fas fa-angle-double-right"></i></button>
						</div>
						<div class="row-fluit">
							<button type="button" class="btn btn-secondary"><i class="fas fa-angle-double-left"></i></button>
						</div>
					</div>
				

					<div class="col-12 col-md-5">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0">
								<thead>
									<tr class="thead-light">
										<th>#</th>
										<th>MENTOR</th>
										<th class="text-left"><i class="fas fa-check"></i></th>
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
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>2</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>3</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>
									<tr>
										<td>4</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
											<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
											</h2>
										</td>
										<td scope="col"><input type="checkbox"></td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			<div class="card-body">
			<div class="row form-row">
				<div class="col-12 col-md-12">
					<div class="card-header" style="margin-bottom: 20px; background-color: #929494;">
						<h5 class="card-title mb-0">Mentoring detail</h5>
					</div>
				</div>

				<div class="col-12 col-md-6">
					<div class="form-group">
						<label>Group name</label>
						<input type="text" class="form-control" value="">
					</div>					
				</div>
				<div class="col-12 col-md-6">
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" rows="6"></textarea>
					</div>
				</div>
				<div class="col-12 col-md-12">
					<button type="button" class="btn btn-secondary float-left">MATCH MENTORING GROUP</button>
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
