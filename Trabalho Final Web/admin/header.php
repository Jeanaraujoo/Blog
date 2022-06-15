                  <!-- HTML -->
                  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view2</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
                     <!-- INICIO DO CODIGO -->
					 <div class="container-fluid">
<div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
                <h2>Bom dia <?php echo $_SESSION['nome']; ?> </h2>
                    <p><a href="?sair">Deslogar</a></p>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="" class="nav-item">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-item">Inserir</a>
                    </li>
                </ul>
	                <p><a href="?sair">Deslogar</a></p>
            </nav>

                            <!-- PHP -->
     <?php
include_once('../config/connection.php');


    if($_SESSION['logado'] != true){
        header('Location: index.php');
        die();
    }

    if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
    }

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('header.php');

?>
