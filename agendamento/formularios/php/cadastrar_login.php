
<?php
$pdo = new PDO("mysql:host=localhost;dbname=nome_do_banco", "usuario", "senha");

$idlogin = $_POST['idlogin'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO login (idlogin, email, senha) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$idlogin, $email, $senha]);

echo "Login cadastrado com sucesso!";
?>
