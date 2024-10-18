<?php
include("../model/connect.php");
if(!isset($_SESSION)){
    session_start();
 }
$objetivo = $_POST['objetivo'];
$historico = $_POST['historico'];
$formacao = $_POST['formacao'];
$habilidades = $_POST['habilidades'];
$hora = date('H:i:s');
$hoje = date('Y-m-d'); 
$strD = str_replace('/', '', $hoje);
$strH = str_replace(':','',$hora);

$query = "INSERT INTO curriculo (cod_usuario,objetivo_curriculo, historico_profissional_curriculo, formacao_academica_curriculo, habilidade_e_competencias_curriculo) 
          VALUES ('$_SESSION[idUsuario]',''$objetivo', '$historico', '$formacao', '$habilidades')";

mysqli_query($connect,"INSERT INTO curriculo (cod_usuario,objetivo_curriculo,historico_profissional_curriculo, formacao_academica_curriculo,habilidade_e_competencias_curriculo) VALUES ('".$_SESSION['idUsuario']."','".$objetivo."','".$historico."','".$formacao."','".$habilidades."')");
header("Location:../view/perfil.php");

?>