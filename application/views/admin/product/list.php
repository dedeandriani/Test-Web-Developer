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
													class="btn btn-small"><i class="fas fa-edit"></i></a>
												<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/' . $product->id) ?>')"
													href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
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
</body>
<?php $this->load->view("admin/_partials/js.php") ?>

</html>
