<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function guardar($producto)
	{
		if ($producto['id']) {
			$this->db->where('id=',$producto['id']);
			$this->db->update('productos',$producto);		
		}
		else
		{
			$this->db->insert('productos',$producto);
		}
	}

	public function getProductos()
	{
		$datos = $this->db->get('productos')->result();
		return $datos;
	}

	public function eliminar($id)
	{
		$this->db->where('id=',$id);
		$this->db->delete('productos');
	}

	public function editar($id)
	{
		$this->db->where('id=',$id);
		$producto = $this->db->get('productos')->result();
		return $producto;
	}

}

