
<?php 
session_start();
if(!isset($_SESSION['login'])) {
  echo "usuario não logado, favor fazer login em : <a href='/desafio_tecnico_kabum/index.php'> link </a>";
  exit;
}
?>
<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 class="mt-5"><?php echo $cliente['nome']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $cliente['nome']; ?></dd>

	<dt>Data Nascimento:</dt>
	<dd><?php echo $cliente['data_nascimento']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $cliente['cpf']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>RG:</dt>
	<dd><?php echo $cliente['rg']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $cliente['telefone']; ?></dd>
</dl>

<!--
<dl class="dl-horizontal">
	<dt>ID:</dt>
	<dd><?php echo $endereco['id']; ?></dd>

	<dt>Logradouro:</dt>
	<dd><?php echo $endereco['logradouro']; ?></dd>
	
	<dt>Bairro:</dt>
	<dd><?php echo $endereco['bairro']; ?></dd>

	<dt>CEP:</dt>
	<dd><?php echo $endereco['cep']; ?></dd>
</dl>
-->

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $cliente['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>