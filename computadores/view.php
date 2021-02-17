<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 class="mt-5">Computador <?php echo $computador['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Departamento:</dt>
	<dd><?php echo $computador['departamento']; ?></dd>

	<dt>Bloco:</dt>
	<dd><?php echo $computador['bloco']; ?></dd>

	<dt>Andar:</dt>
	<dd><?php echo $computador['andar']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Tipo Dispositivo:</dt>
	<dd><?php echo $computador['td']; ?></dd>

	<dt>Processador:</dt>
	<dd><?php echo $computador['processador']; ?></dd>

	<dt>Placa mãe:</dt>
	<dd><?php echo $computador['placamae']; ?></dd>

	<dt>Memória:</dt>
	<dd><?php echo $computador['memoria']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Placa de Vídeo:</dt>
	<dd><?php echo $computador['placavideo']; ?></dd>

	<dt>HD:</dt>
	<dd><?php echo $computador['hd']; ?></dd>

	<dt>SO:</dt>
	<dd><?php echo $computador['so']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $computador['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>