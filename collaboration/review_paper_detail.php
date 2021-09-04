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
				<h4 class="breadcrumb-title">Review detail</h4>
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
										<textarea class="form-control" rows="1" style="resize:none;" disabled=""></textarea>
									</div>
									<div class="form-group">
										<label>Abstract</label>
										<textarea class="form-control" rows="5" style="resize:none;" disabled=""></textarea>
									</div>
								</div>

								<div class="col-6">
									<div class="form-group">
										<label>Created date </label>
										<textarea class="form-control" rows="1" style="resize:none;" disabled=""></textarea>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label>Published date</label>
										<textarea class="form-control" rows="1" style="resize:none;" disabled=""></textarea>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label>File</label><br/>
										<a href="" style="color:#271DF0">Critical Thinking and Collaborative Learning.pdf</a>
										<button class="btn btn-sm btn-success float-right" type="button" id=""><span class="glyphicon glyphicon-download"></span></button>
									</div>
										
									<div class="form-group">
										<label>Review times</label>
										<textarea class="form-control" rows="1" style="resize:none;" disabled=""></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 381px; height: 1201px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
				</div>
				<div class="col-md-12 col-lg-7 col-xl-7">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0">Review</h5>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Upload reviewed file</label>
								<div class="input-group">
									<div class="custom-file">
									    <input type="file" class="custom-file-input" id="inputGroupFile04">
									    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
									</div>
								</div>
							</div>      		
				        	<h6 class="comments-title">Comments (2)</h6>
					        <div class="be-comment">
					            <span class="be-comment-time">
					                <i class="fa fa-clock-o"></i>
					                May 27, 2015 at 3:14am
					            </span>
					            <p class="be-comment-text">
					                Bootstrap includes 260 glyphs from the Glyphicon Halflings set. Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, you should include a link back to Glyphicons whenever possible.
					                <button class="btn btn-sm btn_outline-secondary float-right" style="margin-top: 5px;"><i class="fas fa-trash"></i></button>
					                <button class="btn btn-sm btn_outline-secondary float-right" style="margin-top: 5px;"><i type="button" class="fas fa-edit"></i></button>
					            </p>
					        </div>

					        <div class="be-comment">
					            <span class="be-comment-time">
					                <i class="fa fa-clock-o"></i>
					                May 27, 2015 at 3:14am
					            </span>
					            <p class="be-comment-text">
					                Bootstrap includes 260 glyphs from the Glyphicon Halflings set. Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, you should include a link back to Glyphicons whenever possible.
					                <button class="btn btn-sm btn_outline-secondary float-right" style="margin-top: 5px;"><i class="fas fa-trash"></i></button>
					                <button class="btn btn-sm btn_outline-secondary float-right" style="margin-top: 5px;"><i type="button" class="fas fa-edit"></i></button>
					            </p>
					        </div>
							<div class="form-group">
					        	<label>New Comment</label>
								<textarea class="form-control" rows="2"></textarea>
					        </div>
				        	<a class="btn btn-primary float-right" style="width: 100px;">Submit</a>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</div>


<?php include ('../components/footer.php'); ?>e