<div class="container">

	<h1 class="title">Home</h1>

	<div class="row">
		<div class="col-md-5 border center">
			<h1>Ships</h1>
			<p>You can create and check all the ships here</p>
			<a class="btn btn-primary" href="<?php echo site_url('ships/index'); ?>">Ships</a>
		</div>
		<div class="col-md-2 center">
		</div>
		<div class="col-md-5 border center">
			<h1>Containers</h1>
			<p>You can create and check all the containers here</p>
			<a class="btn btn-primary" href="<?php echo site_url('containers/index'); ?>">Containers</a>
		</div>
	</div>
	<div class="row center">
		<div class="col-md-3 center">
		</div>
		<div class="col-md-6 border">
			<h1>Logout</h1>
			<p>You can logout here</p>
			<a class="btn btn-primary" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
		</div>
		<div class="col-md-3 center">
		</div>
	</div>

	<h3>To Do List:</h3>
	<ul>
		<li>CRUD Maken voor Containers</li>
		<li>CRUD Voor havens maken</li>
		<li>Route kunnen plannen (Ship kan van haven 1 naar haven 2</li>
	</ul>
</div>