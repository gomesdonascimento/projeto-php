<?php
include 'conn.php';

$id     =$_POST['id'];
$nome   =$_POST['band'];

$sql = "UPDATE BANDAS Set 
NOME_BANDAS ='$nome' Where ID_BANDAS = $id";
$result = $conn->query($sql);

header('Location: http://localhost/projPHP/projeto-php/index.php');