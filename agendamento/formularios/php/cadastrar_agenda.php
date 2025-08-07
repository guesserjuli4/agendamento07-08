
<?php
$pdo = new PDO("mysql:host=localhost;dbname=nome_do_banco", "usuario", "senha");

$idagenda = $_POST['idagenda'];
$nome_agenda = $_POST['nome_agenda'];
$diasemana = $_POST['diasemana'];
$hora = $_POST['hora'];
$disciplina = $_POST['disciplina'];
$professor_responsavel = $_POST['professor_responsavel'];
$paciente_agendado = $_POST['paciente_agendado'];
$telefone_paciente = $_POST['telefone_paciente'];

$sql = "INSERT INTO agenda (idagenda, nome_agenda, diasemana, hora, disciplina, professor_responsavel, paciente_agendado, telefone_paciente) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$idagenda, $nome_agenda, $diasemana, $hora, $disciplina, $professor_responsavel, $paciente_agendado, $telefone_paciente]);

echo "Agenda cadastrado com sucesso!";
?>
