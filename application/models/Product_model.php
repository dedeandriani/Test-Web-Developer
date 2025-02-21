<?php defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
	private $_table = "products";

	public $id;
	public $name;
	public $price;
	public $stock;
	public $is_sell;
	public $created_at;
	public $updated_at;

	public function rules()
	{
		return [
			[
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required'
			],

			[
				'field' => 'price',
				'label' => 'Price',
				'rules' => 'required'

			],

			[
				'field' => 'stock',
				'label' => 'stock',
				'rules' => 'required'
			],

			[
				'field' => 'is_sell',
				'label' => 'is_sell',
				'rules' => 'required'
			],
		];
	}

	public function getAll()
	{
		$this->db->from('products');
		$this->db->order_by("name asc,price asc,is_sell asc");
		$query = $this->db->get();
		return $query->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->name = $post["name"];
		$this->price = $post["price"];
		$this->stock = $post["stock"];
		$this->is_sell = $post["is_sell"];
		return $this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->name = $post["name"];
		$this->price = $post["price"];
		$this->stock = $post["stock"];
		$this->is_sell = $post["is_sell"];
		return $this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array("id" => $id));
	}
}
