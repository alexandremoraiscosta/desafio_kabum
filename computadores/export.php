<?php

if(isset($_GET["export"]) && $_GET['export'] == 'csv')  
{  
     $connect = mysqli_connect("localhost", "root", "password", "desafio_tecnico");  
     header('Content-Type: text/csv; charset=utf-8');  
     header('Content-Disposition: attachment; filename=computadores.csv');  
     $output = fopen("php://output", "w");  
     fputcsv($output, array('ID', 'Departamento', 'Bloco', 'Andar',  'Tipo Dispositivo', 'Sistema Operacional', 'Processador', 'Placa Mãe', 'Memória', 'HD', 'Placa de Vídeo', 'Atualizado em'));  
     $query = "SELECT * from computadores ORDER BY id DESC";  
     $result = mysqli_query($connect, $query);  

     while($row = mysqli_fetch_array($result,MYSQLI_ASSOC) ){
          fwrite($output, implode(",", $row). "\n");
     }

     fclose($output);  
} else {
     $connect = mysqli_connect("localhost", "root", "password", "desafio_tecnico");
     header('Content-Type: application/json; charset=utf-8');  
     header('Content-Disposition: attachment; filename=computadores.json');    
     $output = fopen("php://output", "w"); 
     $query = "SELECT * from computadores ORDER BY id DESC";  
     $result = mysqli_query($connect, $query);    
     $data = mysqli_fetch_all($result);
     fwrite($output, json_encode($data));
     fclose($output);  
}

?>