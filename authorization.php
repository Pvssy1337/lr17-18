<?php
$filename = 'users.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($users as $user) {
        list($savedUsername, $savedPassword) = explode(': ', $user);
        if ($savedUsername === $username && $savedPassword === $password) {
            echo 'Вхід успішний';
            exit;
        }
    }

    echo 'Невірний логін або пароль';
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorize</title>
</head>

<body>
    <form method="post" action="">
        <label for="username">Логін:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Увійти">
    </form>

</body>

</html>