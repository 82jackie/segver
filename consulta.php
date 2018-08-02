<?php

  require_once('conexao.php');

  $conn = new Conexao();

  if($_POST){

      $login = preg_replace('/[^[:alpha:]_]/', '',$_POST['login']);
      $senha = preg_replace('/[^[:alnum:]_]/', '',$_POST['senha']);

     #$login = $_POST['login'];
     #$senha = $_POST['senha'];

      $select = $conn->select($login, $senha);
      echo json_encode($select);
     // var_dump($select); 
  }
?>
