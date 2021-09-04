<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-5 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../main/index_student.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="group_list.php">Groups</a></li>
				</ol>
				</nav>
				<h4 class="breadcrumb-title">Group detail</h4>
			</div>
		</div>
	</div>
</div>

<div id="detail" class="content" style="transform: none;">
  <div class="container-fluid" style="transform: none;">
  	<div class="row" style="transform: none;">
			<div class="col-md-8 col-lg-7 col-xl-6" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
			  <div class="section-title">
			        <h4>Members</h4>
			  </div>
				<div class="card card-table">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0">
								<thead>
									<tr class="thead-light">
										<th>#</th>
										<th>Members</th>
										<th class="text-left">CLASS</th>
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
										<td>DT22</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
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
										<td>DT21</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
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
										<td>DC35</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
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
										<td>D54</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
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
										<td>DX19</td>
										<td>
                      <a href="monitor.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>


  		<div class="col-md-4 col-lg-6 col-xl-6">
			  <div class="section-title">
			    <h4>Details</h4>
			  </div>
			  <div class="card">
			  	<div class="card-body">
						<form>
							<div class="row form-row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>Start date </label>
										<div class="input-group date" id='startdatepicker'>
			               <input type='text' class="form-control" disabled="" />
				               <span class="input-group-addon">
				               <span class="glyphicon glyphicon-calendar"></span>
				               </span>
				           </div>
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
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>Finish date </label>
										<div class="input-group date" id='finishdatepicker'>
			               <input type='text' class="form-control" disabled="" />
				               <span class="input-group-addon">
				               <span class="glyphicon glyphicon-calendar"></span>
				               </span>
				           </div>
				        	</div>
				     		</div>
				      <script type="text/javascript">
				         $(function () {
				             $('#finishdatepicker').datetimepicker(
				             	{
				             		format: 'yyyy-mm-dd',
				             		todayBtn: true,
				             		todayHighlight: true,
				             		autoclose: true,
				         		    minView: 2						
				             	});
				         });
				      </script>
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
										<button type="submit" class="btn btn-success float-left">REQUEST</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('../components/footer.php'); ?>

