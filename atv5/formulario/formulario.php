<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="">
       </style>
  </head>
  <body>
  <h1> <b> <center> <font size = 100> <font style: = "Times New Roman"> Formulário </font> </font> </center> </b> </h1> 
    <form action ="formulario.php" method="post">
      <center>Digite seu nome: <input type="text" id="name" name="name"/> </center><br>
      <br>
      <center>Digite seu email: <input type="text" id="email" name="email"/></center> <br>
      <br>
      <center>Digite seu telefone: <input type="text" id="telefone" name="telefone"/></center> <br>
      <br>
      <center>Digite o que desejar falar: <input type="text" id="msg" name="msg"/></center> <br>
      <br>
      <center><input type="submit"/><center>
      <br>
      <br>

      <?php
include "Pessoa.php";

$nome=$_POST['name'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$msg=$_POST['msg'];
$rsp=$_POST['rsp'];
date_default_timezone_set('America/Fortaleza');
$hora_do_dia=date("H");

$Pessoa2=new Pessoa;
$Pessoa2->nome="Bia";

$objeto= new Pessoa;
$objeto->nome=$nome;
$objeto->email=$email;
$objeto->telefone=$telefone;
$objeto -> hora($hora_do_dia);
echo $objeto -> mostrarInformação();
echo $objeto -> falar($Pessoa2);


?> 