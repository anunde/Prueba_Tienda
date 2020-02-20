<?php if(isset($_SESSION['identity'])) :?>
	<h1>Hacer pedido</h1>
	<p><a href="<?=base_url?>?controller=carrito&action=index">Ver los productos y el precio del pedido</a></p>

	<h3>Dirección para el envío</h3>
	<form action="<?=base_url?>?controller=pedido&action=add" method="POST">
		<label for="provincia">Provincia</label>
		<input type="text" name="provincia" required>

		<label for="localidad">Localidad</label>
		<input type="text" name="localidad" required>

		<label for="direccion">Dirección</label>
		<input type="text" name="direccion" required>

		<input type="submit" value="Confirmar pedido">
	</form>




<?php else: ?>
	<h1>Necesitas estar identificado</h1>
	<p>Necesitas iniciar sesión para poder terminar con la realización de tu pedido.</p>
<?php endif; ?>