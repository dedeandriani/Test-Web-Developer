<?php

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Product_model");
	}

	public function index()
	{
		$allProduct = $this->Product_model->countAllProduct();
		return $this->load->view("admin/Products", compact("allProduct"));
	}
}
