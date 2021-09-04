<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_student.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid" data-select2-id="9">
		<div class="row align-items-center" data-select2-id="8">
			<div class="col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../main/index_student.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="group_detail.php">Group Detail</a></li>
					</ol>
				</nav>
				<h4 class="breadcrumb-title">Lessons</h4>
			</div>
		</div>
	</div>
</div>

<div class="content" style="transform: none; min-height: 577.625px;">
	<div class="container-fluid" style="transform: none;">
		<div class="row" style="transform: none;">
			<div class="col-md-5 col-lg-4 col-xl-4 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
				<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
					<div class="card search-filter">
						<div class="card-header">
							<h5 class="card-title mb-0">Group detail</h5>
						</div>
 						<div class="card-body">
							<div class="filter-widget">
								<h6><b>Group name</b></h6>
								<textarea class="form-control" rows="1" disabled="">PHP-PRO-21-01</textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Members</b></h6>
								<textarea class="form-control" rows="1" disabled="">2</textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Created date</b></h6>
								<textarea class="form-control" rows="1" disabled="">08 April 2020</textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Goal</b></h6>
								<textarea class="form-control" rows="2" disabled="">Learn how to build maintainable and secure applications</textarea>
							</div>							
							<div class="filter-widget">
								<h6><b>Desciption</b></h6>
								<textarea class="form-control" rows="7" disabled="">Write clean and maintainable object-oriented code.&#13;&#10;Start a new project from scratch.&#13;&#10;Implement a layered architecture.&#13;&#10;Protect your application from XSS, CSRF and other attacks.</textarea>
							</div>							
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-7 col-lg-8 col-xl-8">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
		                        <header class="mb-2 header row d-flex">
		                            <div class="d-flex flex-column">
		                                <h3 class="h5 font-weight-bold mb-0">Lesson 1: Introducing PHP</h3>
		                            </div>
		                        </header>

								<h5 style="background-color: #CCCCCC; padding: 10px; margin-bottom: 15px;">Desciption</h5>
									<div class="form-group">
										<label>Description</label>
										<textarea class="form-control" rows="10">Beginning PHP and MySQL: From Novice to Professional, Fourth Edition is a major update of W. Jason Gilmore's authoritative book on PHP and MySQL. The fourth edition includes complete coverage of PHP 5.3 features, including namespacing, an update of AMP stack installation and configuration, updates to Zend Framework, coverage of MySQL Workbench, and much more.&#13;&#10;You'll not only receive extensive introductions to the core features of PHP, MySQL, and related tools, but you'll also learn how to effectively integrate them in order to build robust data-driven applications. Gilmore has seven years of experience working with these technologies, and he has packed this book with practical examples and insight into the real-world challenges faced by developers. Accordingly, you will repeatedly return to this book as both a valuable instructional tool and reference guide.</textarea> 
									</div>

								<h5 style="background-color: #CCCCCC; padding: 10px; margin-bottom: 15px;">Resources</h5>
								<h6><b>Documents</b></h6>
									<button type="submit" class="btn btn-sm btn-info"><i class="fas fa-plus"> Add new resource</i></button>

								<h6 style="margin-top: 20px;"><b>Recorded Lecture</b></h6>
									<button type="submit" class="btn btn-sm btn-info"><i class="fa fa-upload" aria-hidden="true"> Upload</i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include ('../components/footer.php'); ?>