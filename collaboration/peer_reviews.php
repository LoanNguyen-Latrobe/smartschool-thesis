<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="content">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-lg-4 dash-board-list red">
			<div class="dash-widget">
				<div class="circle-bar">
					<div class="icon-col">
						<i class="fa fa-user-plus" aria-hidden="true"></i>
					</div>
				</div>
				<div class="dash-widget-info">
					<a href="review_paper_request.php">
						<h3>03</h3>
						<h6>Requests</h6>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-4 dash-board-list yellow">
			<div class="dash-widget">
				<div class="circle-bar">
					<div class="icon-col">
						<i class="fas fa-newspaper"></i>
					</div>
				</div>
				<div class="dash-widget-info">
					<a href="review_paper_list.php">
						<h3>4</h3>
						<h6>Pending Reviews</h6>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-4 dash-board-list blue">
			<div class="dash-widget">
				<div class="circle-bar">
					<div class="icon-col">
						<i class="fas fa-check"></i>
					</div>
				</div>
				<div class="dash-widget-info">
					<a href="review_paper_list.php">
						<h3>10</h3>
						<h6>Reviewed Papers</h6>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-9 float-left">
				<h4 class="mb-4">My Papers</h4>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
				  <label class="form-check-label" for="inlineRadio1">All</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
				  <label class="form-check-label" for="inlineRadio2">Closed</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
				  <label class="form-check-label" for="inlineRadio3">Open</label>
				</div>				
			</div>
			<div class="col-3 float-right">
				<a href="create_new_review.php" class="btn btn-outline-secondary btn-block align-bottom"><i class="fas fa-plus"> Add new paper</i></a>
			</div>
		</div>

		<div class="card card-table">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover table-center mb-0">
						<thead>
							<tr class="thead-dark">
							<th>#</th>
							<th>TITLE</th>
							<th>CREATED DATE</th>
							<th class="text-center">PUBLISHED</th>
							<th>PUBLISHED DATE</th>
							<th class="text-center">ACTION</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="pending"><i class="fas fa-pencil-alt"></i></span></td>
							<td></td>
							<td class="text-center"><a href="my_paper_review.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="accept"><i class="fas fa-check"></i></span></td>
							<td>20 August 2021</td>
							<td class="text-center"><a href="my_paper_review.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="accept"><i class="fas fa-check"></i></span></td>
							<td>20 August 2021</td>
							<td class="text-center"><a href="my_paper_review.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>4</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="accept"><i class="fas fa-check"></i></span></td>
							<td>20 August 2021</td>
							<td class="text-center"><a href="my_paper_review.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="accept"><i class="fas fa-check"></i></span></td>
							<td>20 August 2021</td>
							<td class="text-center"><a href="my_paper_review.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>6</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="accept"><i class="fas fa-check"></i></span></td>
							<td>20 August 2021</td>
							<td class="text-center"><a href="my_paper_review.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>

						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('../components/footer.php'); ?>