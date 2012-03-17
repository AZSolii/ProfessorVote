<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>"ProfessorVote.com"</title>
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
					<?php
					$homeHeaderAttributes = array('id' => 'homeHeader', 'class' => 'brand');
					echo anchor('home', 'ProfessorVote.com', $homeHeaderAttributes);
					?>
					<div class="nav-collapse">
						<form class="form-inline pull-right" style="display: inline; margin-bottom:
						0; margin-left: 15px">
							<ul class="nav">
								<li>
									<a href="#register">Register</a>
								</li>
							</ul>
							<ul class="nav">
								<li>
									<?php
									$loginHeaderAttributes = array('id' => 'loginHeader');
									echo anchor('login', 'Login', $loginHeaderAttributes);
									?>
								</li>
							</ul>
						</form>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
