
<?php
$pdo = new PDO("mysql:host=localhost;dbname=nome_do_banco", "usuario", "senha");

$cpf_professor = $_POST['cpf_professor'];
$nome_professor = $_POST['nome_professor'];
$telefone_professor = $_POST['telefone_professor'];
$datanasc_professor = $_POST['datanasc_professor'];
$especialidade = $_POST['especialidade'];
$disciplinaservico = $_POST['disciplinaservico'];
$gmail_professor = $_POST['gmail_professor'];
$login_idlogin = $_POST['login_idlogin'];

$sql = "INSERT INTO professoradmin (cpf_professor, nome_professor, telefone_professor, datanasc_professor, especialidade, disciplinaservico, gmail_professor, login_idlogin) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$cpf_professor, $nome_professor, $telefone_professor, $datanasc_professor, $especialidade, $disciplinaservico, $gmail_professor, $login_idlogin]);

echo "Professoradmin cadastrado com sucesso!";
?>
