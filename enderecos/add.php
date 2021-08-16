<?php 
session_start();
if(!isset($_SESSION['login'])) {
  echo "usuario não logado, favor fazer login em : <a href='/desafio_tecnico_kabum/index.php'> link </a>";
  exit;
}
?>
<?php 
  require_once('functions.php');
  add();
  $cliente_id = $_GET['id'];
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 class="mt-5">Novo Endereço</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">

    <input value="<?php echo $cliente_id; ?>" type="hidden" class="form-control" name="endereco['cliente_id']">

    <div class="form-group col-md-4">
      <label for="logradouro">Logradouro</label>
      <input type="text" class="form-control" name="endereco['logradouro']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="endereco['bairro']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="endereco['cep']">
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12 mt-3">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php?id=<?php echo $cliente_id; ?>" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>