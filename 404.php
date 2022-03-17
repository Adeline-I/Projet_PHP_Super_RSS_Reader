<?php
    $error = $_SERVER['REDIRECT_STATUS'];
    $error_title = '';
    $error_message = '';
    if ($error == 404) {
        $error_title = '404 Page Not Found';
        $error_message = 'Youhou !!! The document / file requested was not found on this server.';
    };
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
</head>
<body>
    <h1><?= $error_title; ?></h1>
    <p><?= $error_message; ?></p>
</body>
</html>