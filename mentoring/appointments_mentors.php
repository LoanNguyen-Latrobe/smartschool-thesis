<?php require('../components/header.php'); ?>
<?php include ('../components/navbar_teacher.php'); ?>

<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-5 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../main/index_teacher.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="mentor_dashboard.php">Mentoring</a></li>
				</ol>
				</nav>
				<h4 class="breadcrumb-title">Appointments</h4>
			</div>
		</div>
	</div>
</div>

<div class="content">
<div class="container-fluid">
	<div class="col-12">
		<div class="card card-table">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover table-center mb-0"
					  id="table"
					  data-search="true"
					  data-show-columns="true"
					  data-show-multi-sort="true"
					  data-sort-priority='[{"sortName": "date","sortOrder":"desc"},{"sortName":"time","sortOrder":"desc"},{"sortName":"group-name","sortOrder":"desc"};]'
					  data-url="json/data3.json">

						<thead>
							<tr class="thead-dark">
								<th>#</th>
								<th data-field="date" data-sortable="true">DATE</th>
								<th data-field="time" data-sortable="true">TIME</th>
								<th data-field="group-name" data-sortable="true">MENTORING GROUP</th>
								<th>LINK</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>Mon, 23 August, 2021</td>
							<td>10.00AM - 11.00AM</td>
							<td>PHP-PR0-001-2021</td>
							<td><a href="https://latrobe.zoom.us/j/86716720666?pwd=L2hqYTA1OHZjZ01oME9ENHAzUGlHQT09#success" class="text-primary">Click to open</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Mon, 23 August, 2021</td>
							<td>14.00PM - 14.30AM</td>
							<td>ENG-INT-002-2021</td>
							<td><a href="https://latrobe.zoom.us/j/86716720666?pwd=L2hqYTA1OHZjZ01oME9ENHAzUGlHQT09#success" class="text-primary">Click to open</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Mon, 23 August, 2021</td>
							<td>10.00AM - 11.00AM</td>
							<td>PHP-PR0-001-2021</td>
							<td><a href="https://latrobe.zoom.us/j/86716720666?pwd=L2hqYTA1OHZjZ01oME9ENHAzUGlHQT09#success" class="text-primary">Click to open</a></td>
						</tr>
						<tr>
							<td>4</td>
							<td>Mon, 23 August, 2021</td>
							<td>14.00PM - 14.30AM</td>
							<td>ENG-INT-002-2021</td>
							<td><a href="https://latrobe.zoom.us/j/86716720666?pwd=L2hqYTA1OHZjZ01oME9ENHAzUGlHQT09#success" class="text-primary">Click to open</a></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Mon, 23 August, 2021</td>
							<td>10.00AM - 11.00AM</td>
							<td>PHP-PR0-001-2021</td>
							<td><a href="https://latrobe.zoom.us/j/86716720666?pwd=L2hqYTA1OHZjZ01oME9ENHAzUGlHQT09#success" class="text-primary">Click to open</a></td>
						</tr>
						<tr>
							<td>6</td>
							<td>Mon, 23 August, 2021</td>
							<td>14.00PM - 14.30AM</td>
							<td>ENG-INT-002-2021</td>
							<td><a href="https://latrobe.zoom.us/j/86716720666?pwd=L2hqYTA1OHZjZ01oME9ENHAzUGlHQT09#success" class="text-primary">Click to open</a></td>
						</tr>

						</tbody>
						</table>

						<script>
						  $(function() {
						    $('#table').bootstrapTable()
						  })
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include ('../components/footer.php'); ?>