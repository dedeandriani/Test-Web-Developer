<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("product_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["products"] = $this->product_model->getAll();
		$this->load->view("admin/product/list", $data);
	}

	public function add()
	{
		$product = $this->product_model;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if ($validation->run()) {
			$product->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			return redirect(site_url(''));
		}

		$this->load->view("admin/product/new_form");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/products');

		$product = $this->product_model;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if ($validation->run()) {
			$product->update();
			$this->session->set_flashdata('success', 'Berhasil Diupdate');
			return redirect(site_url(''));
		}

		$data["product"] = $product->getById($id);
		if (!$data["product"]) show_404();
		$this->load->view("admin/product/edit_form", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->product_model->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil dihapus');
			redirect(site_url(''));
		}
	}
}
