<?php
include_once "conecta.php";
include_once "tela-cadastro.php";

$email = $_POST['email'];
$senha = $_POST['password'];
$nome = $_POST['nome'];
$dataNasc = $_POST['dataNasc'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$telefone = $_POST['tel'];
$cpf = $_POST['cpf'];
$pessoa = $_POST['type-person'];

$consultar_email = mysqli_query($con, "SELECT * FROM usuario WHERE email = '$email'");

if(mysqli_num_rows($consultar_email)>0){
    
} else{
    $sql = mysqli_query($con, "INSERT INTO usuario(email, senha, data_nascimento, endereco, cidade, bairro, cpf_cnpj, telefone, nome) VALUES ('$email', '$senha', '$dataNasc', '$endereco', '$cidade', '$bairro', '$cpf', '$telefone', '$nome')");
}
?>