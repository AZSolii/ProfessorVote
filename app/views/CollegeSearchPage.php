<div class="container">
	<div class="content">
		<div class="page-header">
			<h1> Available Colleges</h1>
		</div>
		<div class="row">
			<div class="span10">
				<?php foreach ($records as $row):
				?>
				<?php
				$test = $row -> Name;
				?>
				<div class="ex" id='<?php echo $row -> Name;?>'>
					<?php echo $row -> Name;?>
				</div>
				<?php endforeach;?>
				
			</div>
		</div>
	</div>
</div>
