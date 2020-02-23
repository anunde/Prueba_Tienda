<h1>Carrito de compra</h1>

<?php if(isset($_SESSION['carrito']) && $_SESSION['carrito']>=1): ?>
<table>
	<tr>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Unidades</th>
		<th>Eliminar</th>
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
			<td>
				<?=$elemento['unidades']?>
				<div class="updown">
					<a href="<?=base_url?>?controller=carrito&action=up&index=<?=$indice?>" class="button">+</a>
					<a href="<?=base_url?>?controller=carrito&action=down&index=<?=$indice?>" class="button">-</a>
				</div>	
			</td>
			<td><a href="<?=base_url?>?controller=carrito&action=remove&index=<?=$indice?>" class="button button-carrito button-red">Eliminar</a></td>
		</tr>
	<?php endforeach; ?>
</table>
<br>
<div class="delete-carrito">
<a href="<?=base_url?>?controller=carrito&action=delete_all" class="button button-delete button-red">Vaciar carrito</a>
</div>
<div class="total_carrito">
	<?php $stats = Utils::statsCarrito(); ?>
	<h3>Precio Total: <?=$stats['total']?> €</h3>
	<a href="<?=base_url?>?controller=pedido&action=hacer" class="button button-pedido">Hacer pedido</a>
</div>
<?php else: ?>
<p>El carrito está vacio, añade algún producto.</p>
<?php endif; ?>