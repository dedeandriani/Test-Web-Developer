<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed">
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<?php $this->load->view("admin/_partials/sidebar.php") ?>
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
										<th>
											<center>No</center>
										</th>
										<th>
											<center>Name</center>
										</th>
										<th>
											<center>Price</center>
										</th>
										<th>
											<center>Stock</center>
										</th>
										<th>
											<center>Is Sell</center>
										</th>
										<th>
											<center>Created At</center>
										</th>
										<th>
											<center>Updated At</center>
										</th>
										<th>
											<center>Actions</center>
										</th>
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
													echo "<span class='badge bg-success'>Sell</span>";
												} else {
													echo "<span class='badge bg-danger'>Not For Sell</span>";
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
												<a class="btn btn-small text-danger" onclick="deleteProduct('<?php echo $product->id ?>')" title="delete" class="delete" onclick="return confirm('Are you sure you want to delete this item')"><i class="fas fa-trash"></i> </a>
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
	<script type="text/javascript">
		function deleteProduct(id) {
			new swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this Product!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#3085d6",
				cancelButtonColor: "#d33",
				confirmButtonText: "Yes, delete it!"
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire({
						title: "Deleted!",
						text: "Your file has been deleted.",
						icon: "success"
					});
					window.location = "<?php echo site_url('admin/products/delete/') ?>" + id

				}
			});
		}
	</script>
</body>


</html>