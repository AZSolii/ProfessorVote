<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>"Welcome To Professor Vote"</title>
		<!-- Le styles -->
		<link href="../css/bootstrap.css" rel="stylesheet">
		<style>
			body {
				padding-top: 60px;
				/* 60px to make the container go all the way to the bottom of the topbar */
			}
			.topbar .btn {
				border: 0;
			}
		</style>
		<link href="../css/bootstrap-responsive.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="#">ProfessorVote.com</a>
					<div class="nav-collapse">
						<form class="form-inline pull-right" style="display: inline; margin-bottom:
						0; margin-left: 15px">
							<ul class="nav">
								<li>
									<a href="#register">Register</a>
								</li>
							</ul>
							<input type="text" placeholder="Email" class="input-small">
							<input type="password" placeholder="Password" class="input-small">
							<button class="btn" type="submit" style="margin: 5px">
								Go
							</button>
						</form>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="content">
				<div class="page-header">
					<h1> Available Colleges</h1>
				</div>
				<div class="row">
					<div class="span10">
						<div class="ex">
							CS 4500000
						</div>
						<pre>
                            <?php print_r($records);?>
                        </pre>
						<?php foreach ($records as $row):
						?>

						<div class="ex">
							<?php echo $row -> Name;?>
						</div>
						<?php endforeach;?>

						<div id="footer" class="pagination">
							<ul>
								<li class="prev disabled">
									<a href="#">&larr; Previous</a>
								</li>
								<li class="active">
									<a href="#">1</a>
								</li>
								<li>
									<a href="#">2</a>
								</li>
								<li>
									<a href="#">3</a>
								</li>
								<li>
									<a href="#">4</a>
								</li>
								<li>
									<a href="#">5</a>
								</li>
								<li class="next">
									<a href="#">Next &rarr;</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="span4">
						<h3>Resources</h3>
					</div>
				</div>
			</div>
			<footer>
				<p>
					&copy; Company 2012
				</p>
			</footer>
		</div>
		<!-- /container -->
		<!-- Le javascript
		=============================s===================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="../scripts/jquery-1.7.1.min.js"></script>
		<script src="../scripts/bootstrap.min.js"></script>
	</body>
</html>
