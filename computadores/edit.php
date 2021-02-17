<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 class="mt-5">Atualizar Computador</h2>

<form action="edit.php?id=<?php echo $computador['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Departamento</label>
      <input type="text" class="form-control" name="computador['departamento']" value="<?php echo $computador['departamento']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Bloco</label>
      <input type="text" class="form-control" name="computador['bloco']" value="<?php echo $computador['bloco']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">Andar</label>
      <input type="text" class="form-control" name="computador['andar']" value="<?php echo $computador['andar']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Tipo Dispositivo</label>
      <input type="text" class="form-control" name="computador['td']" value="<?php echo $computador['td']; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="campo1">Processador</label>
      <input type="text" class="form-control" name="computador['processador']" value="<?php echo $computador['processador']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Placa mãe</label>
      <input type="text" class="form-control" name="computador['placamae']" value="<?php echo $computador['placamae']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Memória</label>
      <input type="text" class="form-control" name="computador['memoria']" value="<?php echo $computador['memoria']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo1">Placa de Vídeo</label>
      <input type="text" class="form-control" name="computador['placavideo']" value="<?php echo $computador['placavideo']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">HD</label>
      <input type="text" class="form-control" name="computador['hd']" value="<?php echo $computador['hd']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">SO</label>
      <input type="text" class="form-control" name="computador['so']" value="<?php echo $computador['so']; ?>">
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