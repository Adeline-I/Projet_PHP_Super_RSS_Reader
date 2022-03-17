<?php
    $error = $_SERVER['REDIRECT_STATUS'];
    $error_title = '';
    $error_message = '';
    if ($error == 404) {
        $error_title = '404 Page Not Found';
        $error_message_en = 'The document / file requested was not found on this server.';
        $error_message_fr = 'Le document / fichier demandé est introuvable sur ce serveur.';
    };
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>Error 404</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-12 my-5">
                <h1 class="titleError"><?= $error_title; ?></h1>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-6 my-5 py-5 colError">
                <p class="messageError"><?= $error_message_en; ?></p>
                <p class="messageError"><?= $error_message_fr; ?></p>
            </div>
        </div>
    </div>
</body>
</html>