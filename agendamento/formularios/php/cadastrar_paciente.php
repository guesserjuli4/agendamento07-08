
<?php
// Conexão com banco (exemplo com PDO)
$pdo = new PDO("mysql:host=localhost;dbname=nome_do_banco", "usuario", "senha");

$cpf = $_POST['cpf_paciente'];
$nome = $_POST['nome_paciente'];
$telefone = $_POST['telefone_paciente'];
$nascimento = $_POST['datanasc_paciente'];
$email = $_POST['gmail_paciente'];
$servico = $_POST['servico'];

$sql = "INSERT INTO paciente (cpf_paciente, nome_paciente, telefone_paciente, datanasc_paciente, gmail_paciente, servico)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([$cpf, $nome, $telefone, $nascimento, $email, $servico]);

echo "Paciente cadastrado com sucesso!";
?>
