<div class="container my-5">
	<div class="row mb-5 justify-content-center">
		<h2>Login</h2>
	</div>
	<div class="row my-5 justify-content-center">
		<form action="" class="col-auto">
			
			<p>Login</p>
			<p><input type="text" name="login"></p>
			<p>Password</p>
			<p><input type="text" name="pass"></p>
			<button>Login</button>

		</form>
	</div>

	<div class="row my-5">
		<div class="col-2">
			<table class="table table-responsive-xl table-hover table-dark">
			  	<thead>
				    <tr>
				      	<th scope="col">#</th>
				      	<th scope="col">Имя</th>
				    </tr>
			 	</thead>
			  	<tbody>
			  	<?php foreach ($users as $value): ?>
				    <tr>
					      <th scope="row"><?php echo $value['id']; ?></th>
					      <td><?php echo $value['name']; ?></td>
				    </tr>
				<?php endforeach; ?>
			 	</tbody>
			</table>
		</div>
	</div>

	<div class="row mt-5">
		<?php foreach ($users as $val): ?>
			<p class="col-3 text-center"><?php echo $val['name']; ?></p>
		<?php endforeach; ?>	
	</div>
</div>