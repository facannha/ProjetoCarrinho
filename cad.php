<?php
include_once('connect.php');
$nome = $_POST ['lNome'];
$usuario = $_POST ['lEmail'];
$senha = $_POST ['lSenha'];

$sql= "INSERT INTO usuario
(nome, usuario, senha) VALUES
('$nome', '$usuario', '$senha')";
$query= mysqli_query($conexao, $sql);
?>

<script>
    alert('Sua compra foi efetuada com sucesso')
    window.location.href="form.php"
</script>