<?php
$title = $_POST['title'];
$data = $_POST['data'];
$description = $_POST['description'];

echo $title."<br>";
echo $data."<br>";
echo $description."<br>";

// inclui a conexao e prepara as variaveis
include_once('../config/connection.php');
   $stmt = $conectar->prepare("INSERT INTO posts (title, description, data, image) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE)");

   $title = $_POST['title'];
   $data = $_POST['data'];
   $description = $_POST['description'];

   $arquivo = $_FILES['image'];

   // mover o arquivo
   move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);

   $image = 'uploads/'.$arquivo['name'];


   $stmt->bindParam(":TITLE", $title);
   $stmt->bindParam(":DESCRIPTION", $description);
   $stmt->bindParam(":DATA", $data);
   $stmt->bindParam(":IMAGE", $image);
   $stmt->execute();

   /*redireciona o arquivo */
   header("Location: view2.php");


?>