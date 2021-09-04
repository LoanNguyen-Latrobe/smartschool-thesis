<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_teacher.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid" data-select2-id="9">
		<div class="row align-items-center" data-select2-id="8">
			<div class="col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main/index_teacher.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="mentee_dashboard.php">Mentoring</a></li>
					</ol>
				</nav>
				<h4 class="breadcrumb-title">Sharing Files</h4>
			</div>
		</div>
	</div>
</div>


<div class="content" style="transform: none; min-height: 577.625px;">
	<div class="container-fluid" style="transform: none;">
		<div class="row" style="transform: none;">
			<div class="col-md-12 col-lg-6 col-xl-4 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
				<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
					<div class="card search-filter">
						<div class="card-header">
							<h5 class="card-title mb-0">Upload new file</h5>
						</div>
 						<div class="card-body">
 							<div class="filter-widget">
								<h6><b>Add new file</b></h6>
								<div class="input-group">
								  <div class="custom-file">
								    <input type="file" class="custom-file-input" id="inputGroupFile04">
								    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
								  </div>
								</div>
							</div><br/>
							<div class="filter-widget">
								<h6><b>File name</b></h6>
								<textarea class="form-control" rows="1" disabled=""></textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>File type</b></h6>
								<textarea class="form-control" rows="1" disabled=""></textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Description</b></h6>
								<textarea class="form-control" rows="5"></textarea>
							</div>							
							<div>
								<button type="button" class="btn btn-secondary btn-block">Save</button>
							</div>
						</div>
					</div>
					<div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 381px; height: 1201px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
				</div>

			<div class="col-md-12 col-lg-6 col-xl-8">
				<div class="card card-table">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0">
								<thead>
									<tr class="thead-light">
									<th>#</th>
									<th>FILE NAME</th>
									<th>FILE TYPE</th>
									<th>UPLOADER</th>
									<th>UPLOAD DATE</th>
									<th class="text-center">ACTION</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Basic Grammar</td>
										<td>pdf</td>
										<td>Ruby Perrin</td>
										<td>08 April 2020</td>
										<td>
											<a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-download"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Picture dictionary</td>
										<td>pdf</td>
										<td>Ruby Perrin</td>
										<td>08 April 2020</td>
										<td>
										 	<a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-download"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Basic Grammar</td>
										<td>pdf</td>
										<td>Ruby Perrin</td>
										<td>08 April 2020</td>
										<td>
										 	<a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-download"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Basic Grammar</td>
										<td>pdf</td>
										<td>Ruby Perrin</td>
										<td>08 April 2020</td>
										<td>
										 	<a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-download"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>Basic Grammar</td>
										<td>pdf</td>
										<td>Ruby Perrin</td>
										<td>08 April 2020</td>
										<td>
										 	<a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-download"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>Basic Grammar</td>
										<td>pdf</td>
										<td>Ruby Perrin</td>
										<td>08 April 2020</td>
										<td>
										 	<a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-download"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
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


<?php include ('../components/footer.php'); ?>