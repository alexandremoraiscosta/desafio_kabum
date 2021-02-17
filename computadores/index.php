<?php
    require_once('functions.php');
    index();	

	$connect = mysqli_connect("localhost", "root", "password", "desafio_tecnico");  
	$query ="SELECT * FROM computadores ORDER BY id desc";  
	$result = mysqli_query($connect, $query);
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6 mt-5">
			<h2>Computadores</h2>
		</div>
		<div class="col-sm-6 text-right mt-5">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Computador</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
			<a class="btn btn-default" href="export.php?export=csv"><i class="fa fa-refresh"></i> CSV</a>
			<a class="btn btn-default" href="export.php?export=json"><i class="fa fa-refresh"></i> JSON</a>
		</div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<table class="table table-hover mt-3">
<thead>
	<tr>
		<th>ID</th>
		<th>Departamento</th>
		<th>Tipo Dispositivo</th>
		<th>Sistema Operacional</th>
		<th>Processador</th>
		<th>Placa Mãe</th>
		<th>Memória</th>
		<th>HD</th>
		<th>Placa de Vídeo</th>
		<th>Atualizado em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($computadores) : ?>
<?php foreach ($computadores as $computador) : ?>
	<tr>
		<td><?php echo $computador['id']; ?></td>
		<td><?php echo $computador['departamento']; ?></td>
		<td><?php echo $computador['td']; ?></td>
		<td><?php echo $computador['so']; ?></td>
		<td><?php echo $computador['processador']; ?></td>
		<td><?php echo $computador['placamae']; ?></td> 
		<td><?php echo $computador['memoria']; ?></td> 
		<td><?php echo $computador['hd']; ?></td> 
		<td><?php echo $computador['placavideo']; ?></td>
		<td><?php echo $computador['modified']; ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $computador['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $computador['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="delete.php?id=<?php echo $computador['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Excluir</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<div id="actions" class="row">
  <div class="col-md-12 mt-3">
    <a href="/desafio_tecnico/index.php" class="btn btn-primary">Voltar</a>
  </div>
</div>

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>