
<?php
$pdo = new PDO("mysql:host=localhost;dbname=nome_do_banco", "usuario", "senha");

$idlista = $_POST['idlista'];
$nomepaciente = $_POST['nomepaciente'];
$telefone = $_POST['telefone'];
$servico = $_POST['servico'];
$colaboradoradmin_matricula = $_POST['colaboradoradmin_matricula'];

$sql = "INSERT INTO listaspera (idlista, nomepaciente, telefone, servico, colaboradoradmin_matricula) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$idlista, $nomepaciente, $telefone, $servico, $colaboradoradmin_matricula]);

echo "Listaspera cadastrado com sucesso!";
?>
