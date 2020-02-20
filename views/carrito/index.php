<h1>Carrito de compra</h1>

<table>
	<tr>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Unidades</th>
	</tr>
	<?php foreach ($carrito as $indice => $elemento): 
		$producto = $elemento['producto'];
	?>
		<tr>
			<td>
				<?php if($producto->imagen != null): ?>
					<img class="img_carrito" src="<?=base_url?>/uploads/images/<?=$producto->imagen?>">
				<?php else: ?>
					<img class="img_carrito" src="assets/img/camiseta.png">
				<?php endif; ?>
			</td>
			<td><a href="<?=base_url?>?controller=producto&action=ver&id=<?=$producto->id?>"><?=$producto->nombre?></a></td>
			<td><?=$producto->precio?></td>
			<td><?=$elemento['unidades']?></td>
		</tr>
	<?php endforeach; ?>
</table>

<div class="total_carrito">
	<?php $stats = Utils::statsCarrito(); ?>
	<h3>Precio Total: <?=$stats['total']?> €</h3>
	<a href="<?=base_url?>?controller=pedido&action=hacer" class="button button-pedido">Hacer pedido</a>
</div>