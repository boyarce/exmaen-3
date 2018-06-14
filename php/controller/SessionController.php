<?php

    if(!isset($_SESSION["usuario"])) {
        header("location: ".APPLICATION_PATH."/login.php");
        return;
    }

