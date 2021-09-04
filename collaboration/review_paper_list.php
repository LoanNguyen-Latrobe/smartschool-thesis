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
				<h4 class="breadcrumb-title">Reviews list</h4>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card card-table">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover table-center mb-0">
						<thead>
							<tr class="thead-dark">
							<th>#</th>
							<th>AUTHOR</th>
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
							<td>
								<h2 class="table-avatar">
								<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
								<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
								</h2>
							</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="pending"><i class="fas fa-pencil-alt"></i></span></td>
							<td></td>
							<td class="text-center"><a href="review_paper_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>
								<h2 class="table-avatar">
								<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
								<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
								</h2>
							</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="pending"><i class="fas fa-pencil-alt"></i></span></td>
							<td></td>
							<td class="text-center"><a href="review_paper_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>
								<h2 class="table-avatar">
								<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
								<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
								</h2>
							</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="pending"><i class="fas fa-pencil-alt"></i></span></td>
							<td></td>
							<td class="text-center"><a href="review_paper_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>4</td>
							<td>
								<h2 class="table-avatar">
								<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
								<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
								</h2>
							</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="accept"><i class="fas fa-check"></i></span></td>
							<td>20 August 2021</td>
							<td class="text-center"><a href="review_paper_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>5</td>
							<td>
								<h2 class="table-avatar">
								<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
								<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
								</h2>
							</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="accept"><i class="fas fa-check"></i></span></td>
							<td>20 August 2021</td>
							<td class="text-center"><a href="review_paper_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>
						<tr>
							<td>6</td>
							<td>
								<h2 class="table-avatar">
								<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
								<a href="profile.html">Tyrone Roberts<span>tyroneroberts@adobe.com</span></a>
								</h2>
							</td>
							<td>Critical thinking and collaborative learning</td>
							<td>20 June 2021</td>
							<td class="text-center"><span class="accept"><i class="fas fa-check"></i></span></td>
							<td>20 August 2021</td>
							<td class="text-center"><a href="review_paper_detail.php" class="btn btn-sm bg-info-light">
								<i class="fas fa-eye"></i> View</a></td>
						</tr>

						</tbody>
						</table>
					</div>
				</div>

				<div class="load-more text-center">
					<a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
				</div>

			</div>
		</div>
	</div>
</div>

<?php include ('../components/footer.php'); ?>