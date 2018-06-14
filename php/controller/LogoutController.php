<?php

header("location:".APPLICATION_PATH."/login.php");
session_destroy();
session_unset($_SESSION["usuario"]);
