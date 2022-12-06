<?php

$conn = new mysqli('localhost','root','','wedding_project');

$queryr = $_POST['query'];
if($queryr === 'all') {
    $query = $conn->query("SELECT * FROM tb_comment");
}else if($queryr === 'minimal') {
    $query = $conn->query("SELECT * FROM tb_comment LIMIT 2");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($query as $data) : ?>
        <p class="nama"><?= $data['nama'] ?></p>
        <p class="doa pb1"><?= $data['doa'] ?></p>
    <?php endforeach; ?>
</body>
</html>