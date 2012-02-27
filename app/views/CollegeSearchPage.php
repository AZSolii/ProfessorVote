<div class="container">
	<div class="content">
		<div class="page-header">
			<h1> Available Colleges</h1>
		</div>
		<div class="row">
			<div class="span10">
				<?php foreach ($records as $row):
				?>

				<div class="ex">
					<?php echo $row -> Name;?>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>
