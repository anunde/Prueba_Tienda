<?php 

require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController {

	public function index() {
		Utils::isAdmin();
		$categoria = new Categoria;
		$categorias = $categoria->getAll();

		require_once 'views/categoria/index.php';
	}

	public function ver() {
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$categoria = new Categoria();
			$categoria->setId($id);

			$categoria = $categoria->getOne();

			$productos = new Producto();
			$productos->setCategoria_id($id);

			$productos = $productos->getAllCategory();
		}

		require_once 'views/categoria/ver.php';
	}

	public function crear() {
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}

	public function save() {
		Utils::isAdmin();


		if (isset($_POST['name'])) {
			$categoria = new Categoria();
			$categoria->setNombre($_POST['name']);
			$categoria->save();
		}

		header("Location:".base_url."?controller=categoria&action=index");
	}
}