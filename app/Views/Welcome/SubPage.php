<div class="col-lg-8 col-md-8 col-sm-8">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1><?=$title;?></h1>
		</div>
		<div class="panel-body">
			<p><?=$welcomeMessage;?></p>

			<a class="btn btn-md btn-success" href="<?=DIR;?>">
				<?php echo Language::show('backHome', 'Welcome'); ?>
			</a>
		</div>
	</div>
</div>
