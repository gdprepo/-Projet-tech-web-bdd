<?php
        session_start();
        $_SESSION["admin"] = false;
        $_SESSION["newsession"] = false;

        if ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/detailed-presentation.php") {
                header('Location: detailed-presentation.php'); 
        } elseif ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/index.php"){
                header('Location: index.php'); 
        } elseif ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/contact.php"){
                header('Location: contact.php'); 
        } elseif ($_SERVER["HTTP_REFERER"] === "https://www.gd-cvonline.fr/project.php"){
                header('Location: project.php'); 
        }
        header('Location: /index.php');

        exit;
?>