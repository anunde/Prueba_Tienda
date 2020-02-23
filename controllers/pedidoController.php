<?php 

require_once 'models/pedido.php';

class pedidoController {

	public function hacer() {
		

		require_once 'views/pedido/hacer.php';
	}

	public function add() {
		if (isset($_SESSION['identity'])) {
			$usuario_id = $_SESSION['identity']->id;
			$provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
			$localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
			$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;

			$stats = Utils::statsCarrito();
			$coste = $stats['total'];


			if ($provincia && $localidad && $direccion) {

				
				$pedido = new Pedido();
				$pedido->setUsuario_id($usuario_id);
				$pedido->setProvincia($provincia);
				$pedido->setLocalidad($localidad);
				$pedido->setDireccion($direccion);
				$pedido->setCoste($coste);

				$save = $pedido->save();

				$save_linea = $pedido->save_linea();

				if ($save && $save_linea) {
					$_SESSION['pedido'] = "complete";
				} else {
					$_SESSION['pedido'] = "failed";
				}

			} else {
				$_SESSION['pedido'] = "failed";
			}

			header("Location:".base_url."?controller=pedido&action=confirmado");

		} else {
			header("Location:".base_url);
		}
	}

	public function confirmado() {
		if (isset($_SESSION['identity'])) {
			$identity = $_SESSION['identity'];
			$pedido = new Pedido();
			$pedido->setUsuario_id($identity->id);
			$pedido = $pedido->getOneByUser();

			$pedido_productos = new Pedido();
			$productos = $pedido_productos->getByPedido($pedido->id);

			if ($pedido && isset($_SESSION['carrito'])) {
				unset($_SESSION['carrito']);
			}
		}

		require_once 'views/pedido/confirmado.php';
	}

	public function mis_pedidos() {
		Utils::isIdentified();

		$usuario_id = $_SESSION['identity']->id;
		$pedidos = new Pedido();
		$pedidos->setUsuario_id($usuario_id);
		$pedidos = $pedidos->getAllByUser();

		require_once 'views/pedido/mis_pedidos.php';
	}

	public function detalle() {
		Utils::isIdentified();

		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$pedido = new Pedido();
			$pedido->setId($id);

			$pedido = $pedido->getOne();

			$pedido_productos = new Pedido();
			$productos = $pedido_productos->getByPedido($id);

			require_once 'views/pedido/detalle.php';
		} else {
			header("Location:".base_url."?controller=pedido&action=mis_pedidos");
		}

	}

	public function gestion() {
		Utils::isAdmin();
		$gestion = true;

		$pedido = new Pedido();
		$pedidos = $pedido->getAll();

		require_once 'views/pedido/mis_pedidos.php';
	}

	public function estado() {
		Utils::isAdmin();

		if (isset($_POST['pedido_id']) && isset($_POST['estado'])) {
			$id = $_POST['pedido_id'];
			$estado = $_POST['estado'];

			$pedido = new Pedido();
			$pedido->setId($id);
			$pedido->setEstado($estado);
			$pedido->edit();

			header("Location:".base_url."?controller=pedido&action=detalle&id=".$id);
		} else {
			header("Location:".base_url);
		}
	}
}