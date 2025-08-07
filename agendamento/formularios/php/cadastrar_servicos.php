
<?php
$pdo = new PDO("mysql:host=localhost;dbname=nome_do_banco", "usuario", "senha");

$idservicos = $_POST['idservicos'];
$odontopedi = $_POST['odontopedi'];
$endodontia = $_POST['endodontia'];
$periodontia = $_POST['periodontia'];
$avaliacao = $_POST['avaliacao'];
$restauracao = $_POST['restauracao'];
$extracao = $_POST['extracao'];
$proteseremovivel = $_POST['proteseremovivel'];

$sql = "INSERT INTO servicos (idservicos, odontopedi, endodontia, periodontia, avaliacao, restauracao, extracao, proteseremovivel) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$idservicos, $odontopedi, $endodontia, $periodontia, $avaliacao, $restauracao, $extracao, $proteseremovivel]);

echo "Servicos cadastrado com sucesso!";
?>
