<?php
include("../model/connect.php");
if (!isset($_SESSION)) {
    session_start();
}


if (!isset($_SESSION['idEmpresa'])) {
    die("Erro: ID da empresa não definido na sessão.");
}

$hora = date('H:i:s');
$hoje = date('Y-m-d'); 
$strD = str_replace('/', '', $hoje);
$strH = str_replace(':', '', $hora);

// Verifica se o cod_empresa existe na tabela empresa
$cod_empresa = $_SESSION['idEmpresa'];
$result = mysqli_query($connect, "SELECT * FROM empresa WHERE cod_empresa = '$cod_empresa'");
if (mysqli_num_rows($result) === 0) {
    die("Erro: ID da empresa não encontrado.");
}

    $query = "INSERT INTO vagas (cod_empresa, area_vagas, hora_vagas, data_vagas, sobre_vagas, carga_horaria_vagas, pre_requisitos_vagas, beneficios_vagas, salario_vagas, tipos_vagas, tempo_contrato_vagas) VALUES ('$cod_empresa', '" . $_POST["area_vagas"] . "', '" . $strH . "', '" . $hoje . "', '" . $_POST["sobre_vagas"] . "', '" . $_POST["carga_horaria_vagas"] . "', '" . $_POST["pre_requisitos_vagas"] . "', '" . $_POST["beneficios_vagas"] . "', '" . $_POST["salario_vagas"] . "', '" . $_POST["tipos_vagas"] . "', '" . $_POST["tempo_contrato_vagas"] . "')";

    if (!mysqli_query($connect, $query)) {
        echo "Erro: " . mysqli_error($connect);
        exit;
    }


header("location:../view/criarVagas.php");
