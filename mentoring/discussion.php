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
				<h4 class="breadcrumb-title">Discussion</h4>
			</div>
		</div>
	</div>
</div>

<div class="content">
  <div class="container-fluid">
        <div class="row">
            <div class="col-3 d-flex">
                <a href="discussion_detail.php" class="btn btn-secondary btn-block"><i class="fas fa-plus"> Start new discussion</i></a>
            </div>
            <div class="col-12 d-flex card card-table" style="padding-top: 20px">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-center mb-0">
                        <thead>
                            <tr class="thead-dark">
                                <th>#</th>
                                <th>DISCUSSION</th>
                                <th>STARTED BY</th>
                                <th>LAST POST</th>
                                <th>REPLIES</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="discussion_detail.php">How to use grammarly</a></td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>3</td>
                            <td>
                                <a href="discussion_detail.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="discussion_detail.php">How to use grammarly</a></td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>3</td>
                            <td>
                                <a href="discussion_detail.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="discussion_detail.php">How to use grammarly</a></td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>3</td>
                            <td>
                                <a href="discussion_detail.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a href="discussion_detail.php">How to use grammarly</a></td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>3</td>
                            <td>
                                <a href="discussion_detail.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><a href="discussion_detail.php">How to use grammarly</a></td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>3</td>
                            <td>
                                <a href="discussion_detail.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><a href="discussion_detail.php">How to use grammarly</a></td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>3</td>
                            <td>
                                <a href="discussion_detail.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><a href="discussion_detail.php">How to use grammarly</a></td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>
                                <h2 class="table-avatar">
                                <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="../images/users/user_1.png" alt="User Image"></a>
                                <a href="profile.html">Tyrone Roberts<span>9 Aug 2021</span></a>
                                </h2>
                            </td>
                            <td>3</td>
                            <td>
                                <a href="discussion_detail.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit"></span></a> | <button class="btn btn-sm btn-danger btn_remove" type="button" id=""><span class="glyphicon glyphicon-trash"></span></button>
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



