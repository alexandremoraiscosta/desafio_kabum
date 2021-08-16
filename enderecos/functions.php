<?php

require_once('../config.php');
require_once(DBAPI);

$enderecos = null;
$endereco = null;

/**
 *  Listagem dos Endereços
 */
function index($cliente_id) {
	global $enderecos;
	$enderecos = find('enderecos', null, $cliente_id);
}

/**
 *  Cadastro de Endereços
 */
function add() {

    if (!empty($_POST['endereco'])) {
      
      $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
      $endereco = $_POST['endereco'];
      $endereco['modified'] = $endereco['created'] = $today->format("Y-m-d H:i:s");
      
      $cliente_id = $endereco["'cliente_id'"];

      save('enderecos', $endereco);
      header("location: index.php?id={$cliente_id}");
    }
}

/**
 *	Atualização/Edição de Endereços
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['endereco'])) {

      $endereco = $_POST['endereco'];
      $endereco['modified'] = $now->format("Y-m-d H:i:s");

      update('enderecos', $id, $endereco);
      header('location: index.php');
    } else {

      global $endereco;
      $endereco = find('enderecos', $id);
    }
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Endereço
 */
function view($id = null) {
    global $endereco;
    $endereco = find('enderecos', $id);
}

/**
 *  Exclusão de um Endereço
 */
function delete($id = null) {

    global $endereco;
    $endereco = remove('enderecos', $id);

    header('location: index.php');
}