<div class="box">
			<h4 class="display-4 text-center">View</h4><br>
			<?php if (isset($_GET['success'])) { ?>
				<div class="alert alert-success" role="alert">
					<?php echo $_GET['success']; ?>
				</div>
			<?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">Order.NO</th>
							<th scope="col">ID.NO</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						while ($rows = mysqli_fetch_assoc($result)) {
							$i++;
						?>
							<tr>
								<th scope="row"><?=$i?></th>
								<th scope="row"><?= $rows['id'] ?></th>
								<td><?= $rows['name'] ?></td>
								<td><?php echo $rows['email']; ?></td>
								<td><a href="update.php?id=<?= $rows['id'] ?>" class="btn btn-success">Update</a>

									<a href="php/delete.php?id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" class="link-primary">Create</a>
			</div>
		</div>