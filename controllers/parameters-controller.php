<?php
    require_once(dirname(__FILE__).'/../config/init.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $console = filter_input(INPUT_POST, 'console', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

        if (count(array_intersect(array_keys(CONSOLE), $console)) != count($console)) {
            $error["console"] = "erreur";
        } else {
            setcookie('console', json_encode($console), (time() + (86400 * 30))); // Le cookie expirera dans 86400s = 1 jour
        }
        $consoleCookies = json_decode($_COOKIE['console']);
    };

    header('location: /controllers/pages-controller.php');
    die;