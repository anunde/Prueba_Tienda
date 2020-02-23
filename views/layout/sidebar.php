

<!--BARRA LATERAL-->
<aside id="lateral">

	<?php if(isset($_SESSION['carrito'])): ?>
	<div id="carrito" class="block_aside">
		<h3>Mi carrito</h3>
		<ul>
			<?php $stats = Utils::statsCarrito() ?>
			<li><a href="<?=base_url?>?controller=carrito&action=index">Productos (<?=$stats['count']?>)</a></li>
			<li><a href="<?=base_url?>?controller=carrito&action=index">Total: <?=$stats['total']?> €</a></li>
			<li><a href="<?=base_url?>?controller=carrito&action=index">Ver el carrito</a></li>
		</ul>
	</div>
	<?php endif; ?>

	<div id="login" class="block_aside">
		<?php if(!isset($_SESSION['identity'])): ?>
		<h3>Entrar a la Web</h3>
		<form action="<?=base_url?>?controller=usuario&action=login" method="POST">
			<label for="email">Email:</label>
			<input type="email" name="email">

			<label for="password">Contraseña:</label>
			<input type="password" name="password">

			<input type="submit" value="Enviar">
		</form>
		<?php else: ?>
			<h3>Hola, <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
		<?php endif; ?>
		<ul>
		<?php if(isset($_SESSION['admin'])): ?>
			<li><a href="<?=base_url?>?controller=categoria&action=index">Gestionar categorías</a></li>				
			<li><a href="<?=base_url?>?controller=producto&action=gestion">Gestionar productos</a></li>				
			<li><a href="<?=base_url?>?controller=pedido&action=gestion">Gestionar pedidos</a></li>
		<?php endif; ?>
		
		<?php if(isset($_SESSION['identity'])): ?>					
			<li><a href="<?=base_url?>?controller=pedido&action=mis_pedidos">Mis pedidos</a></li>
			<li><a href="<?=base_url?>?controller=usuario&action=logout">Cerrar Sesión</a></li>
		<?php else: ?>
			<li><a href="<?=base_url?>?controller=usuario&action=registro">Registrate</a></li>
		<?php endif; ?>
		</ul>
	</div>		
</aside>
<!---CONTENIDO CENTRAL--->

<div id="central">