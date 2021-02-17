<?php

require_once('../config.php');
require_once(DBAPI);

$computadores = null;
$computador = null;

/**
 *  Listagem dos Computadores
 */
function index() {
	global $computadores;
	$computadores = find_all('computadores');
}

/**
 *  Cadastro de Computadores
 */
function add() {

    if (!empty($_POST['computador'])) {
      
      $today = 
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
      $computador = $_POST['computador'];
      $computador['modified'] = $computador['created'] = $today->format("Y-m-d H:i:s");
      
      save('computadores', $computador);
      header('location: index.php');
    }
}

/**
 *	Atualizacao/Edicão de Computadores
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['computador'])) {

      $computador = $_POST['computador'];
      $computador['modified'] = $now->format("Y-m-d H:i:s");

      update('computadores', $id, $computador);
      header('location: index.php');
    } else {

      global $computador;
      $computador = find('computadores', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Computador
 */
function view($id = null) {
    global $computador;
    $computador = find('computadores', $id);
}

/**
 *  Exclusão de um Computador
 */
function delete($id = null) {

    global $computador;
    $computador = remove('computadores', $id);
  
    header('location: index.php');
}