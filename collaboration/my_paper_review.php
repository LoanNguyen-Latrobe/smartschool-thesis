<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid" data-select2-id="9">
		<div class="row align-items-center" data-select2-id="8">
			<div class="col-md-8 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main/index_student.html">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="../collaboration/peer_reviews.php">Peer Reviews</a></li>
					</ol>
				</nav>
				<h4 class="breadcrumb-title">My Paper - Review detail</h4>
			</div>
		</div>
	</div>
</div>


<div class="content" style="transform: none; min-height: 577.625px;">
	<div class="container-fluid" style="transform: none;">
		<div class="row" style="transform: none;">
			<div class="col-md-12 col-lg-5 col-xl-5 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
				<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
					<div class="card search-filter">
						<div class="card-header">
							<h5 class="card-title mb-0">Details</h5>
						</div>
 						<div class="card-body">
							<div class="form-row"> 
								<div class="col-12">
									<div class="form-group">
										<label>Title</label>
										<textarea class="form-control" rows="1" style="resize:none;"></textarea>
									</div>
									<div class="form-group">
										<label>Abstract</label>
										<textarea class="form-control" rows="5" style="resize:none;"></textarea>
									</div>
								</div>

								<div class="col-6">
									<div class="form-group">
										<label>Created date </label>
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
								<div class="col-6">
									<div class="form-group">
										<label>Published date</label>
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
								<div class="col-12">
									<div class="form-group">
										<label>File</label><br/>
										<a href="" style="color:#271DF0">Critical Thinking and Collaborative Learning.pdf</a>
									</div>
									<div class="form-group">
										<label>Upload the newest file</label>
										<div class="input-group">
											<div class="custom-file">
											    <input type="file" class="custom-file-input" id="inputGroupFile04">
											    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label>Review times</label>
										<textarea class="form-control" rows="1" style="resize:none;" disabled=""></textarea>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<button type="button" class="btn btn-outline-primary align-bottom-textarea">Send Request</button>
									</div>
								</div>
							</div>

							<div class="submit">
								<button type="button" class="btn btn-block">Save</button>
							</div>
						</div>
					</div>
					<div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 381px; height: 1201px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
				</div>
				<div class="col-md-12 col-lg-7 col-xl-7">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0">Reviewers</h5>
						</div>
						<div class="card-body">
							<div class="accordion" id="accordionExample">
							  <div class="card">
							    <div class="card-header" id="headingOne">
							    	<div class="row">
							    		<div class="col-8">
								            <header class="mb-2 header row d-flex">
								                <div class="mr-3" style="width: 60px; padding-left: 10px;">
								                    <img class="rounded-circle w-100" src="../images/users/user_2.png">
								                </div>
								                <div class="d-flex flex-column">
								                    <h4 class="h5 font-weight-bold mb-0"><a href="">Ruby Perrin</a></h4>
								                    <div class="mb-3" tabindex="-1">
								                     <a href="mailto:rubyPerrin@gmail.com" target="_blank" class="far fa-envelope"> rubyPerrin@gmail.com</a>
								                    </div>
								                </div>
								            </header>									    	
								        </div>
					        			<div class="col-4">
							            	<button class="btn btn-link row d-flex float-right align-bottom" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="glyphicon glyphicon-chevron-down"></span>
						        			</button>
					        			</div>
							    	</div>
							    </div>

							    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							      <div class="card-body">
									<div class="form-group">
										<label>Reviewed File</label><br/>
										<a href="" style="color:#271DF0">Critical Thinking and Collaborative Learning.pdf</a>
									</div>
						        	<h6 class="comments-title">Comments (2)</h6>
							        <div class="be-comment">
							            <span class="be-comment-time">
							                <i class="fa fa-clock-o"></i>
							                May 27, 2015 at 3:14am
							            </span>
							            <p class="be-comment-text">
							                Pellentesque gravida tristique ultrices. 
							                Sed blandit varius mauris, vel volutpat urna hendrerit id. 
							                Curabitur rutrum dolor gravida turpis tristique efficitur.
							            </p>
							        </div>
							        <div class="be-comment">
							            <span class="be-comment-time">
							                <i class="fa fa-clock-o"></i>
							                May 27, 2015 at 3:14am
							            </span>
							            <p class="be-comment-text">
							                Pellentesque gravida tristique ultrices. 
							                Sed blandit varius mauris, vel volutpat urna hendrerit id. 
							                Curabitur rutrum dolor gravida turpis tristique efficitur.
							            </p>
							        </div>
							      </div>
							    </div>
							  </div>

							  <div class="card">
							    <div class="card-header" id="headingTwo">
							    	<div class="row">
							    		<div class="col-8">
								            <header class="mb-2 header row d-flex">
								                <div class="mr-3" style="width: 60px; padding-left: 10px;">
								                    <img class="rounded-circle w-100" src="../images/users/user_2.png">
								                </div>
								                <div class="d-flex flex-column">
								                    <h4 class="h5 font-weight-bold mb-0"><a href="">Ruby Perrin</a></h4>
								                    <div class="mb-3" tabindex="-1">
								                     <a href="mailto:rubyPerrin@gmail.com" target="_blank" class="far fa-envelope"> rubyPerrin@gmail.com</a>
								                    </div>
								                </div>
								            </header>									    	
								        </div>
					        			<div class="col-4">
							            	<button class="btn btn-link row d-flex float-right align-bottom" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><span class="glyphicon glyphicon-chevron-down"></span>
						        			</button>
					        			</div>
							    	</div>
							    </div>
							    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							      <div class="card-body">
									<div class="form-group">
										<label>Reviewed File</label><br/>
										<a href="" style="color:#271DF0">Critical Thinking and Collaborative Learning.pdf</a>
									</div>
						        	<h6 class="comments-title">Comments (2)</h6>
							        <div class="be-comment">
							            <span class="be-comment-time">
							                <i class="fa fa-clock-o"></i>
							                May 27, 2015 at 3:14am
							            </span>
							            <p class="be-comment-text">
							                Pellentesque gravida tristique ultrices. 
							                Sed blandit varius mauris, vel volutpat urna hendrerit id. 
							                Curabitur rutrum dolor gravida turpis tristique efficitur.
							            </p>
							        </div>
							        <div class="be-comment">
							            <span class="be-comment-time">
							                <i class="fa fa-clock-o"></i>
							                May 27, 2015 at 3:14am
							            </span>
							            <p class="be-comment-text">
							                Pellentesque gravida tristique ultrices. 
							                Sed blandit varius mauris, vel volutpat urna hendrerit id. 
							                Curabitur rutrum dolor gravida turpis tristique efficitur.
							            </p>
							        </div>
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="headingThree">
							    	<div class="row">
							    		<div class="col-8">
								            <header class="mb-2 header row d-flex">
								                <div class="mr-3" style="width: 60px; padding-left: 10px;">
								                    <img class="rounded-circle w-100" src="../images/users/user_2.png">
								                </div>
								                <div class="d-flex flex-column">
								                    <h4 class="h5 font-weight-bold mb-0"><a href="">Ruby Perrin</a></h4>
								                    <div class="mb-3" tabindex="-1">
								                     <a href="mailto:rubyPerrin@gmail.com" target="_blank" class="far fa-envelope"> rubyPerrin@gmail.com</a>
								                    </div>
								                </div>
								            </header>									    	
								        </div>
					        			<div class="col-4">
							            	<button class="btn btn-link row d-flex float-right align-bottom" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"><span class="glyphicon glyphicon-chevron-down"></span>
						        			</button>
					        			</div>
							    	</div>
							    </div>
							    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							      <div class="card-body">
									<div class="form-group">
										<label>Reviewed File</label><br/>
										<a href="" style="color:#271DF0">Critical Thinking and Collaborative Learning.pdf</a>
									</div>
						        	<h6 class="comments-title">Comments (2)</h6>
							        <div class="be-comment">
							            <span class="be-comment-time">
							                <i class="fa fa-clock-o"></i>
							                May 27, 2015 at 3:14am
							            </span>
							            <p class="be-comment-text">
							                Pellentesque gravida tristique ultrices. 
							                Sed blandit varius mauris, vel volutpat urna hendrerit id. 
							                Curabitur rutrum dolor gravida turpis tristique efficitur.
							            </p>
							        </div>
							        <div class="be-comment">
							            <span class="be-comment-time">
							                <i class="fa fa-clock-o"></i>
							                May 27, 2015 at 3:14am
							            </span>
							            <p class="be-comment-text">
							                Pellentesque gravida tristique ultrices. 
							                Sed blandit varius mauris, vel volutpat urna hendrerit id. 
							                Curabitur rutrum dolor gravida turpis tristique efficitur.
							            </p>
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