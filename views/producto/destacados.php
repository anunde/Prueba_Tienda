
			<h1>Algunos de nuestros productos</h1>


		<?php while($pro = $productos->fetch_object()): ?>
			<div class="product">
				<a href="<?=base_url?>?controller=producto&action=ver&id=<?=$pro->id?>">
					<?php if($pro->imagen != null): ?>
						<img src="<?=base_url?>/uploads/images/<?=$pro->imagen?>">
					<?php else: ?>
						<img src="assets/img/camiseta.png">
					<?php endif; ?>
					<h2><?=$pro->nombre?></h2>
				</a>
				<p><?=$pro->precio?></p>
				<a href="<?=base_url?>?controller=carrito&action=add&id=<?=$pro->id?>" class="boton">Comprar</a>
			</div>
		<?php endwhile; ?>
