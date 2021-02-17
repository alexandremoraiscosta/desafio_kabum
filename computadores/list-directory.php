<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h3 class="mt-5">Listagem de Diretórios</h3>

<?php
$path = "files/";
// Abre a tabela, cria títulos
echo "<table>";
echo "<tr> <th></th> </tr>";
// Loop que gera registros
foreach (new DirectoryIterator($path) as $fileInfo) {

    if($fileInfo->isDot()) continue;

    // Imprime linhas de registros
    echo "<tr>
            <td>
              ".$path.$fileInfo->getFilename()."<br/>
            </td>
          </tr>";
}

// Fecha a tabela
echo "</table>";
?>

<div id="actions" class="row">
  <div class="col-md-12 mt-3">
    <a href="/desafio_bluepex/index.php" class="btn btn-primary">Voltar</a>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>