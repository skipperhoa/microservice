<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    phpinfo();
    exit;

    $conn = mysqli_connect('db_server1', 'hoanguyencoder', '12345678', 'db_hoanguyencoder');
    //mysqli_set_charset($conn, 'utf8mb4'); // Set charset
    $sql = "select * from posts";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['title'] . '<br>';
    }

?>
</body>
</html>