
<?php
$pdo = new PDO("mysql:host=localhost;dbname=nome_do_banco", "usuario", "senha");

$RA = $_POST['RA'];
$nome_aluno = $_POST['nome_aluno'];
$gmail_aluno = $_POST['gmail_aluno'];
$datanasc_aluno = $_POST['datanasc_aluno'];
$inicio_graduacao = $_POST['inicio_graduacao'];
$alunocel = $_POST['alunocel'];
$login_idlogin = $_POST['login_idlogin'];

$sql = "INSERT INTO aluno (RA, nome_aluno, gmail_aluno, datanasc_aluno, inicio_graduacao, alunocel, login_idlogin) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$RA, $nome_aluno, $gmail_aluno, $datanasc_aluno, $inicio_graduacao, $alunocel, $login_idlogin]);

echo "Aluno cadastrado com sucesso!";
?>
