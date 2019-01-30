<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDO | PHP</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jscript.php"></script>
</head>
<body>
		<div class="container">
			<div class="row">
				<br><br>
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-danger">
						<div class="panel-heading">PDO | PHP - Create Records</div>
						<div class="panel-body">
							<form action="controller.php" method="post" id="saveForm" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Name" class="form-control" name="name" id="name">
										</div>
										<a href="" class="btn btn-default pull-left" id="cancel">Cancel</a>
										<input type="submit" value="Create" class="btn btn-danger pull-right create" name="create" id="create">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<table class="table table-striped table-bordered table-success">
							<thead>
								<th>SL</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Action</th>
							</thead>
							<tr>
								<td>1</td>
								<td>Arjun</td>
								<td>8722222996</td>
								<td><a href="" class="btn btn-xs btn-primary" id="edit">Edit</a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
</body>
</html>