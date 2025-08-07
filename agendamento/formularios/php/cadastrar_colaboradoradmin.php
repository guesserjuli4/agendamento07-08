
<?php
$pdo = new PDO("mysql:host=localhost;dbname=nome_do_banco", "usuario", "senha");

$matricula = $_POST['matricula'];
$nome_colaborador = $_POST['nome_colaborador'];
$gmail_colaborador = $_POST['gmail_colaborador'];
$datanasc_colaborador = $_POST['datanasc_colaborador'];
$login_idlogin = $_POST['login_idlogin'];

$sql = "INSERT INTO colaboradoradmin (matricula, nome_colaborador, gmail_colaborador, datanasc_colaborador, login_idlogin) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$matricula, $nome_colaborador, $gmail_colaborador, $datanasc_colaborador, $login_idlogin]);

echo "Colaboradoradmin cadastrado com sucesso!";
?>
