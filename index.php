<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>

<?php 
  session_start();
  require_once('login/login.php');
  login();
?>

<?php 

if(!isset($_SESSION['login'])) : ?>

<h2 class="mt-5">Login</h2>

<form action="index.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Usuário</label>
      <input type="text" class="form-control" name="login['usuario']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Senha</label>
      <input type="text" class="form-control" name="login['senha']">
    </div>
  </div>
    
  <div id="actions" class="row">
    <div class="col-md-12 mt-3">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>

<?php exit; ?>
<?php endif; ?>



<?php $db = open_database(); ?>


<br/>

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2 mt-3">
		<a href="clientes/add.php" class="btn btn-primary">
			<div class="row mt-3">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Cliente</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2 mt-3">
		<a href="clientes" class="btn btn-default">
			<div class="row mt-3">
				<div class="col-xs-12 text-center">
					<i class="fa fa-laptop fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Ver Clientes</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2 mt-3">
		<a href="clientes/list-directory.php" class="btn btn-default">
			<div class="row mt-3">
				<div class="col-xs-12 text-center">
					<i class="fa fa-paste fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Listagem de Diretórios</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>