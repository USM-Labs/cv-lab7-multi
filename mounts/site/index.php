<?php
$version = getenv('APP_VERSION') ?: 'dev';
$dbHost = getenv('MYSQL_HOST') ?: 'database';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Containers Lab 7</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <main>
        <h1>Lab 7: docker-compose</h1>
        <p>Версия приложения: <?= htmlspecialchars($version, ENT_QUOTES, 'UTF-8') ?></p>
        <p>Сервис базы данных доступен в сети compose по имени: <?= htmlspecialchars($dbHost, ENT_QUOTES, 'UTF-8') ?></p>
    </main>
</body>
</html>
