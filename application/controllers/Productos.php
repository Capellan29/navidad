<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('producto_model');
	}

	public function index()
	{
		$datos['productos'] = $this->producto_model->getProductos();
		$this->load->view('producto',$datos);
	}

	public function guardarProducto()
	{
		$this->producto_model->guardar($_POST);
		$datos['productos'] = $this->producto_model->getProductos();
		$this->load->view('producto',$datos);
	}

	public function del()
	{
		$id = isset($_GET['id'])?$_GET['id']+0:0;
		$this->producto_model->eliminar($id);
		$datos['productos'] = $this->producto_model->getProductos();
		$this->load->view('producto',$datos);
	}

	public function edit()
	{
		$id = isset($_GET['id'])?$_GET['id']+0:0;
		$datos['pr'] = $this->producto_model->editar($id)[0];
		$datos['productos'] = $this->producto_model->getProductos();
		$this->load->view('producto',$datos);
	}


}
