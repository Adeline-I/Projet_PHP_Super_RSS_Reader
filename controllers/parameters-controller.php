<?php

// if (!empty($_POST['console'])) { 
//     $console = $_POST['console']; 
//     $firstChoice = $console[0]; 
//     $_COOKIE['firstChoice'] = $firstChoice;

//     setcookie('firstChoice', $firstChoice, (time() + (86400 * 30))); // Le cookie expirera dans 86400s = 1 jour
// }

    require(dirname(__FILE__).'/../config/init.php');
    $console = filter_input(INPUT_POST, 'console', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

    if (count(array_intersect(array_keys(CONSOLE), $console)) != count($console)) {
        $error["console"] = "erreur";
    } else {
        setcookie('console', json_encode($console), (time() + (86400 * 30))); // Le cookie expirera dans 86400s = 1 jour
    }
    $consoleCookies = json_decode($_COOKIE['console']);

    if (isset($_POST["valider"])) {
        require(dirname(__FILE__).'/../article.php');
    }

    

    // header('location: /controllers/pages-controller.php');
?>