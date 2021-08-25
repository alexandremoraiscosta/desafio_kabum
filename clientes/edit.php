<?php 
session_start();
if(!isset($_SESSION['login'])) {
  echo "usuario não logado, favor fazer login em : <a href='/desafio_tecnico_kabum/index.php'> link </a>";
  exit;
}
?>
<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 class="mt-5">Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $cliente['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="cliente['nome']" value="<?php echo $cliente['nome']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo1">Data Nascimento</label>
      <input type="text" class="form-control" name="cliente['data_nascimento']" value="<?php echo $cliente['data_nascimento']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="cliente['cpf']" value="<?php echo $cliente['cpf']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">RG</label>
      <input type="text" class="form-control" name="cliente['rg']" value="<?php echo $cliente['rg']; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="cliente['telefone']" value="<?php echo $cliente['telefone']; ?>">
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12 mt-3">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>