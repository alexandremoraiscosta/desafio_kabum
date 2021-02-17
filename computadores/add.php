<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2 class="mt-5">Novo Computador</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Departamento</label>
      <input type="text" class="form-control" name="computador['departamento']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Bloco</label>
      <input type="text" class="form-control" name="computador['bloco']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">Andar</label>
      <input type="text" class="form-control" name="computador['andar']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Tipo Dispositivo</label>
      <input type="text" class="form-control" name="computador['td']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo1">Processador</label>
      <input type="text" class="form-control" name="computador['processador']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Placa mãe</label>
      <input type="text" class="form-control" name="computador['placamae']">
    </div>
    
    <div class="form-group col-md-3">
      <label for="campo3">Memória</label>
      <input type="text" class="form-control" name="computador['memoria']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-4">
      <label for="campo1">Placa de Vídeo</label>
      <input type="text" class="form-control" name="computador['placavideo']">
    </div>
    
    <div class="form-group col-md-4">
      <label for="campo2">HD</label>
      <input type="text" class="form-control" name="computador['hd']">
    </div>
    
    <div class="form-group col-md-4">
      <label for="campo3">SO</label>
      <input type="text" class="form-control" name="computador['so']">
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