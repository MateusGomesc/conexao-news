<?php
    include '../includes/connection.php';

    // receive all reports
    $sql = "SELECT * FROM noticias";
    $result = $connection->query($sql);

    $categorys = ['Política', 'Esportes', 'Cultura', 'Tecnologia'];

    // Redirect message
    session_start();
    if(isset($_SESSION['msg'])  && !empty($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <?php include '../includes/header.php' ?>
    <main>
        <?php  include '../includes/menu.php' ?>
        <div class="data-container">
            <h1 class="title">Notícias</h1>
            <div class="card-container">
                <?php while($report = mysqli_fetch_object($result)){ ?>
                    <div class="card">
                        <h3><?php echo $report->title; ?></h3>
                        <h4><?php echo $report->lead; ?></h4>
                        <p class="info"><?php echo "$report->author - $report->date - " . $categorys[$report->category - 1]; ?></p>
                        <p class="description"><?php echo $report->description; ?></p>
                        <div class="card-btn-container">
                            <button type="submit" class="btn-red">Deletar</button>
                            <a class="btn-blue" href="../cadastro/form.php">Editar</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>