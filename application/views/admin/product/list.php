<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed">
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<?php $this->load->view("admin/_partials/sidebar.php") ?>
				<div class="sb-sidenav-footer">
					<div class="small">Logged in as:</div>
					Start Bootstrap
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">Product</h1>
					<?php if ($this->session->flashdata('success')): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
					<?php endif; ?>
					<div class="card mb-4">
						<div class="card-header">
							<i class="fas fa-table me-1"></i>
							List Product
							<a href="<?php echo site_url('admin/products/add') ?>" class="btn btn-primary btn-sm float-end">Add Product</a>
						</div>
						<div class="card-body">
							<table id="datatablesSimple">
								<thead>
									<tr>
										<th>No</th>
										<th>Name</th>
										<th>Price</th>
										<th>Stock</th>
										<th>Is Sell</th>
										<th>Created At</th>
										<th>Updated At</th>
										<th width="150">Actions</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach ($products as $product): ?>
										<tr>
											<td>
												<?php
												static $i = 1;
												echo $i++;

												?>

											</td>
											<td width="150">
												<?php echo $product->name ?>
											</td>
											<td>
												<?php echo number_format($product->price) ?>
											</td>
											<td>
												<?php echo $product->stock ?>
											</td>
											<td>
												<?php
												if ($product->is_sell == 1) {
													echo "<span class='badge bg-success'>Di Jual</span>";
												} else {
													echo "<span class='badge bg-danger'>Tidak Di Jual</span>";
												}
												?>
											</td>
											<td>
												<?php echo $product->created_at ?>
											</td>
											<td>
												<?php echo $product->updated_at ?>
											</td>
											<td width="250">
												<a href="<?php echo site_url('admin/products/edit/' . $product->id) ?>"
													class="btn btn-small text-primary"><i class="fas fa-edit"></i></a>
												<a class="btn btn-small text-danger" href="<?php echo site_url('admin/products/delete/' . $product->id) ?>" title="delete" class="delete" onclick="return confirm('Are you sure you want to delete this item')"><i class="fas fa-trash"></i> </a>
											</td>

										</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</main>
			<footer class="py-4 bg-light mt-auto">
				<?php $this->load->view("admin/_partials/footer.php") ?>
			</footer>
		</div>
	</div>


	<?php $this->load->view("admin/_partials/js.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
</body>


</html>
