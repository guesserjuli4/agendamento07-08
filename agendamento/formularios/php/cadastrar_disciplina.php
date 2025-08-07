
<?php
$pdo = new PDO("mysql:host=localhost;dbname=nome_do_banco", "usuario", "senha");

$iddisciplina = $_POST['iddisciplina'];
$disciplina = $_POST['disciplina'];
$professores = $_POST['professores'];

$sql = "INSERT INTO disciplina (iddisciplina, disciplina, professores) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$iddisciplina, $disciplina, $professores]);

echo "Disciplina cadastrado com sucesso!";
?>
