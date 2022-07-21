<?php
include_once('conexao.php');

$nome = $_POST ['Lnome'];
$sobrenome = $_POST ['Lsobrenome'];
$email = $_POST ['Lemail'];
$telefone = $_POST ['Lnumero'];
$senha = $_POST ['Lsenha'];

$sql= "INSERT INTO usuario
(Nome, Sobrenome, Email, Celular, Senha) VALUES
('$nome', '$sobrenome', '$email', '$telefone', '$senha')";

$query= mysqli_query($conexao, $sql);
?>

<script>
    alert('Sua compra foi efetuada com sucesso')
    window.location.href="store.html"
</script>