<?php 
session_start();
if(!isset($_SESSION['login'])) {
  echo "usuario não logado, favor fazer login em : <a href='/desafio_tecnico_kabum/index.php'> link </a>";
  exit;
}
?>
<?php
    require_once('functions.php');
	$cliente_id = $_GET['id'];
	index($cliente_id);
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6 mt-5">
			<h2>Endereços</h2>
		</div>
		<div class="col-sm-6 text-right mt-5">
	    	<a class="btn btn-primary" href="add.php?id=<?php echo $cliente_id; ?>"><i class="fa fa-plus"></i> Novo Endereço</a>
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
		<th>Logradouro</th>
		<th>Bairro</th>
		<th>CEP</th>
	</tr>
</thead>
<tbody>
<?php if ($enderecos) : ?>
<?php foreach ($enderecos as $endereco) : ?>
	<tr>
		<td><?php echo $endereco['id']; ?></td>
		<td><?php echo $endereco['logradouro']; ?></td>
		<td><?php echo $endereco['bairro']; ?></td>
		<td><?php echo $endereco['cep']; ?></td>
		<td class="actions text-right">
			<a href="view.php?id=<?php echo $endereco['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $endereco['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="delete.php?id=<?php echo $endereco['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Excluir</a>
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
    <a href="/desafio_tecnico_kabum/clientes" class="btn btn-primary">Voltar</a>
  </div>
</div>

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>