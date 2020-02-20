<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>
<h1>Tu pedido se ha confirmado</h1>

<p>Tu pedido ha sido guardado con éxito, una vez realices la transferencia bancaria con el coste del pedido, sera procesado y enviado.</p>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
<h1>Tu pedido NO ha podido procesarse.</h1>
<?php endif; ?>