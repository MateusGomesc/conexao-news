<?php
    include '../includes/connection.php';

    // receive all reports
    $sql = "SELECT * FROM noticias";
    $result = $connection->query($sql);

    $categorys = ['Política', 'Esportes', 'Cultura', 'Tecnologia'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/head.php'; ?>
    <title>Home</title>
</head>
<body>
    <?php 
        include '../includes/header.php';

        // verify message
        session_start();
        if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
            include '../includes/modal.php';
            $_SESSION['msg'] = '';
        } 
    ?>
    <main>
        <?php  include '../includes/menu.php' ?>
        <div class="data-container">
            <h1 class="title">Notícias</h1>
            <div class="card-container">
                <?php if($result->num_rows < 1){ echo "Nenhuma notícia cadastrada!"; } ?>
                <?php while($report = mysqli_fetch_object($result)){ ?>
                    <a href="../noticia/show.php?id=<?php echo $report->id; ?>">
                        <div class="card">
                            <h3><?php echo $report->title; ?></h3>
                            <h4><?php echo $report->lead; ?></h4>
                            <?php $date = new DateTimeImmutable($report->date); ?>
                            <p class="info"><?php echo "$report->author - " . str_replace('-','/', $date->format('d-m-Y')) . " - " . $categorys[$report->category - 1]; ?></p>
                            <p class="description"><?php echo $report->description; ?></p>
                            <div class="card-btn-container">
                                <a class="btn-red" onclick="deleteReport(<?php echo $report->id; ?>)">Deletar</a>
                                <a class="btn-blue" href="../cadastro/form.php?id=<?php echo $report->id; ?>">Editar</a>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </main>
    <script>
        function deleteReport(id){
            if(confirm('Deseja realmente excluir?')){
                window.location.href = '../cadastro/delete.php?id=' + id
            }
        }

        function hiddenModal(){
            document.getElementsByClassName('modal')[0].style.display = 'none'
        }
    </script>
</body>
</html>