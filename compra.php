
<?php
include_once('connect.php');
$nome = $_POST ['nome'];
$numero = $_POST ['numero'];
$data = $_POST ['validade'];
$cvv = $_POST ['cvv'];

$endereco = $_POST ['endereco'];
$casa = $_POST ['casa'];
$complemento = $_POST ['complemento'];
$bairro = $_POST ['bairro'];
$cidade = $_POST ['cidade'];
$telefone = $_POST ['telefone'];
$estado = $_POST ['estado'];



$sql= "INSERT INTO compras
(Nome, Numero, Data, CVV, Endereço, Casa, Complemento, Bairro, Cidade, Telefone, Estado) VALUES
('$nome', '$numero', '$data', '$cvv', '$endereco', '$casa', '$complemento', '$bairro', '$cidade', '$telefone', '$estado')";
$query= mysqli_query($conexao, $sql);
?>

<script>
    alert('Sua compra foi efetuada com sucesso')
    window.location.href="painel.php"
</script>