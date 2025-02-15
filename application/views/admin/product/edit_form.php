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
					<div id="content-wrapper">

						<div class="container-fluid">

							<?php if ($this->session->flashdata('success')): ?>
								<div class="alert alert-success" role="alert">
									<?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php endif; ?>

							<div class="card mb-3">
								<div class="card-header">
									<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
								</div>
								<div class="card-body">

									<form action="" method="post" enctype="multipart/form-data">

										<input type="hidden" name="id" value="<?php echo $product->id ?>" />

										<div class="form-group">
											<label for="name">Name*</label>
											<input class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>"
												type="text" name="name" placeholder="Product name" value="<?php echo $product->name ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('name') ?>
											</div>
										</div>

										<div class="form-group">
											<label for="price">Price</label>
											<input class="form-control <?php echo form_error('price') ? 'is-invalid' : '' ?>"
												type="number" name="price" min="0" placeholder="Product price" value="<?php echo $product->price ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('price') ?>
											</div>
										</div>

										<div class="form-group">
											<label for="price">Stock</label>
											<input class="form-control <?php echo form_error('stock') ? 'is-invalid' : '' ?>"
												type="number" name="stock" min="0" placeholder="Product stock" value="<?php echo $product->stock ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('stock') ?>
											</div>
										</div>

										<div class="form-group">
											<label for="price">Status Product</label>
											<select class="form-control <?php echo form_error('is_sell') ? 'is-invalid' : '' ?>" name="is_sell">
												<option value="<?php echo $product->is_sell ?>"><?php echo $product->is_sell == 1 ? 'Is Sell' : 'Not For Sell' ?></option">
												<option value="1">Is Sell</option>
												<option value="0">Not For Sell</option>
											</select>
											<div class="invalid-feedback">
												<?php echo form_error('is_sell') ?>
											</div>
										</div>
										<br>
										<input class="btn btn-success" type="submit" name="btn" value="Update" />
										<button onclick="deleteProduct('<?php echo $product->id ?>')" class="btn btn-danger" type="reset">Delete</button>
										<button onclick="window.history.go(-1); return false;" class="btn btn-secondary" type="reset">Cancel</button>

									</form>

								</div>

								<div class="card-footer small text-muted">
									* required fields
								</div>


							</div>

							<div class="card-footer small text-muted">
								* required fields
							</div>


						</div>
					</div>
			</main>
			<footer class="py-4 bg-light mt-auto">
				<?php $this->load->view("admin/_partials/footer.php") ?>
			</footer>
		</div>
	</div>
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
<?php $this->load->view("admin/_partials/js.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>


</html>