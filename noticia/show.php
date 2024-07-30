<?php
    include '../includes/connection.php';

    $reportId = $_GET['id'];
    $sql = 'SELECT * FROM noticias WHERE id=' . $reportId;
    $result = $connection->query($sql);
    $report = mysqli_fetch_object($result);

    $categorys = ['Política', 'Esportes', 'Cultura', 'Tecnologia'];
    $date = new DateTimeImmutable($report->date);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php'; ?>
    <title></title>
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <?php  include '../includes/menu.php' ?>
        <div class="data-container">
            <h1 class="title"><?php echo $report->title; ?></h1>
            <h2 class="lead"><?php echo $report->lead; ?></h2>
            <p class="info"><?php echo "$report->author - " . str_replace('-','/', $date->format('d-m-Y')) . " - " . $categorys[$report->category - 1]; ?></p>
            <p class="report"><?php echo $report->report; ?></p>
            <div class="btn-report-container">
                <a class="btn-red" href="../home">Voltar</a>
            </div>
        </div>
    </main>
</body>
</html>