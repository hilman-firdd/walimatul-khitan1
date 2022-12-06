<?php

$nama = $_POST['name'];
$doa = $_POST['doa'];

$conn = new mysqli('localhost','u1686239_uo_nunikfaisal','bandung123=','u1686239_uo_nunikfaisal');
$query = $conn->query("INSERT INTO tb_comment (nama,doa) VALUES ('".$nama."','".$doa."')");