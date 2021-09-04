<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_teacher.php'); ?>

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
				<h4 class="breadcrumb-title">Schedule timings</h4>
			</div>
		</div>
	</div>
</div>

<div class="content" style="transform: none; min-height: 577.625px;">
	<div class="container-fluid" style="transform: none;">
		<div class="row" style="transform: none;">
			<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
				<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
					<div class="card search-filter">
						<div class="card-header">
							<h5 class="card-title mb-0">Mentoring detail</h5>
						</div>
 						<div class="card-body">
							<div class="filter-widget">
								<h6><b>Group name</b></h6>
								<textarea class="form-control" rows="1" disabled="">LG-INTER-21-01</textarea>
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
								<textarea class="form-control" rows="2" disabled="">Intermediate level in English</textarea>
							</div>							
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-7 col-lg-8 col-xl-9">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Schedule Timings</h4>
								<div class="profile-box">
									<div class="row">
										<div class="col-lg-4">
										  	<div class="form-group">
										    	<label for="exampleFormControlSelect1">Timing Slot Duration</label>
										    	<select class="form-control" id="exampleFormControlSelect1">
										      		<option>30 mins</option>
										      		<option>45 mins</option>
										      		<option>1 hours</option>
										    	</select>
										  	</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="card schedule-widget mb-0">
												<div class="schedule-header">
													<div class="schedule-nav">
														<ul class="nav nav-tabs nav-justified">
															<li class="nav-item">
																<a class="nav-link active" data-toggle="tab" href="#slot_monday">Monday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_tuesday">Tuesday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_wednesday">Wednesday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_thursday">Thursday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_friday">Friday</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-toggle="tab" href="#slot_sunday">Saturday</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="tab-content schedule-cont">
													<div id="slot_sunday" class="tab-pane fade">
 														<h4 class="card-title d-flex justify-content-between">
															<span>Time Slots</span>
															<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
														</h4>
														<p class="text-muted mb-0">Not Available</p>
													</div>

													<div id="slot_monday" class="tab-pane fade active show">
														<h4 class="card-title d-flex justify-content-between">
															<span>Time Slots</span>
															<a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
														</h4>

														<div class="user-times">
															<div class="user-slot-list">
																8:00 pm - 11:30 pm
																<a href="javascript:void(0)" class="delete_schedule">
																	<i class="fa fa-times"></i>
																</a>
															</div>
															<div class="user-slot-list">
																11:30 pm - 1:30 pm
																<a href="javascript:void(0)" class="delete_schedule">
																	<i class="fa fa-times"></i>
																</a>
															</div>
															<div class="user-slot-list">
																3:00 pm - 5:00 pm
																<a href="javascript:void(0)" class="delete_schedule">
																	<i class="fa fa-times"></i>
																</a>
															</div>
														<div class="user-slot-list">
															6:00 pm - 11:00 pm
															<a href="javascript:void(0)" class="delete_schedule">
																<i class="fa fa-times"></i>
															</a>
														</div>
													</div>
												</div>

												<div id="slot_tuesday" class="tab-pane fade">
													<h4 class="card-title d-flex justify-content-between">
														<span>Time Slots</span>
														<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
													</h4>
													<p class="text-muted mb-0">Not Available</p>
												</div>

												<div id="slot_wednesday" class="tab-pane fade">
													<h4 class="card-title d-flex justify-content-between">
														<span>Time Slots</span>
														<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
													</h4>
													<p class="text-muted mb-0">Not Available</p>
												</div>

												<div id="slot_thursday" class="tab-pane fade">
													<h4 class="card-title d-flex justify-content-between">
														<span>Time Slots</span>
														<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
													</h4>
													<p class="text-muted mb-0">Not Available</p>
												</div>

												<div id="slot_friday" class="tab-pane fade">
													<h4 class="card-title d-flex justify-content-between">
														<span>Time Slots</span>
														<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
													</h4>
													<p class="text-muted mb-0">Not Available</p>
												</div>

												<div id="slot_saturday" class="tab-pane fade">
													<h4 class="card-title d-flex justify-content-between">
														<span>Time Slots</span>
														<a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
													</h4>
													<p class="text-muted mb-0">Not Available</p>
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
		</div>
	</div>
</div>

<?php include ('../components/footer.php'); ?>

<div class="modal fade custom-modal" id="add_time_slot">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Time Slots</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="hours-info">
						<div class="row form-row hours-cont">
							<div class="col-12 col-md-10">
								<div class="row form-row">
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>Start Time</label>
											<select class="form-control">
												<option>Select</option>
												<option>12.00 am</option>
												<option>1.00 am</option>
												<option>2.00 am</option>
												<option>3.00 am</option>
												<option>4.00 am</option>
												<option>5.00 am</option>
												<option>6.00 am</option>
												<option>7.00 am</option>
												<option>8.00 am</option>
												<option>9.00 am</option>
												<option>10.00 am</option>
												<option>11.00 am</option>
												<option>12.00 pm</option>
												<option>1.00 pm</option>
												<option>2.00 pm</option>
												<option>3.00 pm</option>
												<option>4.00 pm</option>
												<option>5.00 pm</option>
												<option>6.00 pm</option>
												<option>7.00 pm</option>
												<option>8.00 pm</option>
												<option>9.00 pm</option>
												<option>10.00 pm</option>
												<option>11.00 pm</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>End Time</label>
											<select class="form-control">
												<option>Select</option>
												<option>12.00 am</option>
												<option>1.00 am</option>
												<option>2.00 am</option>
												<option>3.00 am</option>
												<option>4.00 am</option>
												<option>5.00 am</option>
												<option>6.00 am</option>
												<option>7.00 am</option>
												<option>8.00 am</option>
												<option>9.00 am</option>
												<option>10.00 am</option>
												<option>11.00 am</option>
												<option>12.00 pm</option>
												<option>1.00 pm</option>
												<option>2.00 pm</option>
												<option>3.00 pm</option>
												<option>4.00 pm</option>
												<option>5.00 pm</option>
												<option>6.00 pm</option>
												<option>7.00 pm</option>
												<option>8.00 pm</option>
												<option>9.00 pm</option>
												<option>10.00 pm</option>
												<option>11.00 pm</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="add-more mb-3">
						<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
					</div>
					<div class="submit-section text-center">
						<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade custom-modal" id="edit_time_slot">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
 			<div class="modal-header">
				<h5 class="modal-title">Edit Time Slots</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body">
			<form>
				<div class="hours-info">
					<div class="row form-row hours-cont">
						<div class="col-12 col-md-10">
							<div class="row form-row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>Start Time</label>
										<select class="form-control">
											<option>Select</option>
											<option>12.00 am</option>
											<option>1.00 am</option>
											<option>2.00 am</option>
											<option>3.00 am</option>
											<option>4.00 am</option>
											<option>5.00 am</option>
											<option>6.00 am</option>
											<option>7.00 am</option>
											<option>8.00 am</option>
											<option>9.00 am</option>
											<option>10.00 am</option>
											<option>11.00 am</option>
											<option>12.00 pm</option>
											<option>1.00 pm</option>
											<option>2.00 pm</option>
											<option>3.00 pm</option>
											<option>4.00 pm</option>
											<option>5.00 pm</option>
											<option>6.00 pm</option>
											<option>7.00 pm</option>
											<option>8.00 pm</option>
											<option>9.00 pm</option>
											<option>10.00 pm</option>
											<option>11.00 pm</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>End Time</label>
										<select class="form-control">
											<option>Select</option>
											<option>12.00 am</option>
											<option>1.00 am</option>
											<option>2.00 am</option>
											<option>3.00 am</option>
											<option>4.00 am</option>
											<option>5.00 am</option>
											<option>6.00 am</option>
											<option>7.00 am</option>
											<option>8.00 am</option>
											<option>9.00 am</option>
											<option>10.00 am</option>
											<option>11.00 am</option>
											<option>12.00 pm</option>
											<option>1.00 pm</option>
											<option>2.00 pm</option>
											<option>3.00 pm</option>
											<option>4.00 pm</option>
											<option>5.00 pm</option>
											<option>6.00 pm</option>
											<option>7.00 pm</option>
											<option>8.00 pm</option>
											<option>9.00 pm</option>
											<option>10.00 pm</option>
											<option>11.00 pm</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row form-row hours-cont">
						<div class="col-12 col-md-10">
							<div class="row form-row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>Start Time</label>
										<select class="form-control">
											<option>Select</option>
											<option>12.00 am</option>
											<option>1.00 am</option>
											<option>2.00 am</option>
											<option>3.00 am</option>
											<option>4.00 am</option>
											<option>5.00 am</option>
											<option>6.00 am</option>
											<option>7.00 am</option>
											<option>8.00 am</option>
											<option>9.00 am</option>
											<option>10.00 am</option>
											<option>11.00 am</option>
											<option>12.00 pm</option>
											<option>1.00 pm</option>
											<option>2.00 pm</option>
											<option>3.00 pm</option>
											<option>4.00 pm</option>
											<option>5.00 pm</option>
											<option>6.00 pm</option>
											<option>7.00 pm</option>
											<option>8.00 pm</option>
											<option>9.00 pm</option>
											<option>10.00 pm</option>
											<option>11.00 pm</option>
										</select>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>End Time</label>
										<select class="form-control">
											<option>Select</option>
											<option>12.00 am</option>
											<option>1.00 am</option>
											<option>2.00 am</option>
											<option>3.00 am</option>
											<option>4.00 am</option>
											<option>5.00 am</option>
											<option>6.00 am</option>
											<option>7.00 am</option>
											<option>8.00 am</option>
											<option>9.00 am</option>
											<option>10.00 am</option>
											<option>11.00 am</option>
											<option>12.00 pm</option>
											<option>1.00 pm</option>
											<option>2.00 pm</option>
											<option>3.00 pm</option>
											<option>4.00 pm</option>
											<option>5.00 pm</option>
											<option>6.00 pm</option>
											<option>7.00 pm</option>
											<option>8.00 pm</option>
											<option>9.00 pm</option>
											<option>10.00 pm</option>
											<option>11.00 pm</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
					</div>
					<div class="row form-row hours-cont">
						<div class="col-12 col-md-10">
							<div class="row form-row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label>Start Time</label>
											<select class="form-control">
												<option>Select</option>
												<option>12.00 am</option>
												<option>1.00 am</option>
												<option>2.00 am</option>
												<option>3.00 am</option>
												<option>4.00 am</option>
												<option>5.00 am</option>
												<option>6.00 am</option>
												<option>7.00 am</option>
												<option>8.00 am</option>
												<option>9.00 am</option>
												<option>10.00 am</option>
												<option>11.00 am</option>
												<option>12.00 pm</option>
												<option>1.00 pm</option>
												<option>2.00 pm</option>
												<option>3.00 pm</option>
												<option>4.00 pm</option>
												<option>5.00 pm</option>
												<option>6.00 pm</option>
												<option>7.00 pm</option>
												<option>8.00 pm</option>
												<option>9.00 pm</option>
												<option>10.00 pm</option>
												<option>11.00 pm</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label>End Time</label>
											<select class="form-control">
												<option>Select</option>
												<option>12.00 am</option>
												<option>1.00 am</option>
												<option>2.00 am</option>
												<option>3.00 am</option>
												<option>4.00 am</option>
												<option>5.00 am</option>
												<option>6.00 am</option>
												<option>7.00 am</option>
												<option>8.00 am</option>
												<option>9.00 am</option>
												<option>10.00 am</option>
												<option>11.00 am</option>
												<option>12.00 pm</option>
												<option>1.00 pm</option>
												<option>2.00 pm</option>
												<option>3.00 pm</option>
												<option>4.00 pm</option>
												<option>5.00 pm</option>
												<option>6.00 pm</option>
												<option>7.00 pm</option>
												<option>8.00 pm</option>
												<option>9.00 pm</option>
												<option>10.00 pm</option>
												<option>11.00 pm</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
						</div>
					</div>
					
					<div class="add-more mb-3">
						<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
					</div>
					<div class="submit-section text-center">
						<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
