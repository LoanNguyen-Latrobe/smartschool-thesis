<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid" data-select2-id="9">
		<div class="row align-items-center" data-select2-id="8">
			<div class="col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main/index_student.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="../main/group_list.php">Groups</a></li>
					</ol>
				</nav>
				<h4 class="breadcrumb-title">Create New Group</h4>
			</div>
		</div>
	</div>
</div>

<div id="mentor_list" class="content">
  	<div class="container-fluid">
	  	<div class="section-title">
	        <h4>DETAIL</h4>
	  	</div>
		<div class="card">
			<div class="card-body">
				<div class="form-row justify-content-between"> 
					<div class="col-3">
						<div class="form-group">
							<label>Major</label>
							<select class="form-select form-select-lg mb-1">
							  <option selected>Select one</option>
							  <option value="1">Information Technology</option>
							  <option value="2">Science</option>
							  <option value="3">Economy</option>
							  <option value="4">Politics</option>
							  <option value="5">Social</option>
							</select>
						</div>
					</div>
					<div class="col-2">
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
					<div class="col-7">
						<div class="form-group">
							<label>Goal</label>
							<textarea class="form-control" rows="1"></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label>Desciption</label>
					<textarea class="form-control" rows="2"></textarea>
				</div>
				<button type="button" class="btn btn-secondary btn-sm float-left" style="width: 100px">Save</button>
			</div>
		</div>
	</div>
</div>


<div class="content" style="transform: none; min-height: 577.625px;">
	<div class="container-fluid" style="transform: none;">
		<div class="row" style="transform: none;">
			<div class="col-md-12 col-lg-4 col-xl-4 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
				<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
					<div class="card search-filter">
						<div class="card-header">
							<h5 class="card-title mb-0">Search Peers</h5>
						</div>
 						<div class="card-body">
				  			<div class="filter-widget">
								<div class="row form-row">
									<div class="col-12">
										<div class="form-group">
											<label>Major</label>
											<div class="list-group">
											  <label class="list-group-item">
											    <input class="form-check-input me-1" type="checkbox" value="">Information Technology
											  </label>
											  <label class="list-group-item">
											    <input class="form-check-input me-1" type="checkbox" value="">Science
											  </label>
											  <label class="list-group-item">
											    <input class="form-check-input me-1" type="checkbox" value="">Economy
											  </label>
											  <label class="list-group-item">
											    <input class="form-check-input me-1" type="checkbox" value="">Politics
											  </label>
											  <label class="list-group-item">
											    <input class="form-check-input me-1" type="checkbox" value="">Social
											  </label>
											</div>
										</div>
										<div class="form-group">
											<label>Class / Course / Unit</label>
											<textarea class="form-control" rows="1" style="resize: none"></textarea>
										</div>
										<div class="form-group">
											<label>Experience years</label>
											<select class="form-select form-select-lg mb-1">
											  <option selected>Select one</option>
											  <option value="1"> <= 5 years</option>
											  <option value="2"> <= 10 years</option>
											  <option value="3"> <= 15 years</option>
											  <option value="4"> <= 20 years</option>
											  <option value="5"> > 20 years</option>
											</select>
										</div>
										<div class="btn-search">
											<button type="button" class="btn btn-block">Search</button>
										</div>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 381px; height: 1201px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div>
			</div>

			<div class="col-md-12 col-lg-8 col-xl-8" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
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
					                      <a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
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
										<td>Science</td>
										<td>DT21</td>
										<td>
                      						<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
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
                     						<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
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
										<td>IT</td>
										<td>D54</td>
										<td>
                  							<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
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
										<td>IT</td>
										<td>DX19</td>
										<td>
                      						<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>
											<h2 class="table-avatar">
											<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_5.png" alt="User Image"></a>
											<a href="profile.html">Olive Lawrence <span>olivelawrence@adobe.com</span></a>
											</h2>												
										</td>
										<td>IT</td>
										<td>DX19</td>
										<td>
                      						<a href="group_detail_request.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a> | <button class="btn btn-sm btn btn-success" type="button" id=""><span class="glyphicon glyphicon-plus-sign"> Request</span></button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="load-more text-center">
					<a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require('../components/footer.php'); ?>
