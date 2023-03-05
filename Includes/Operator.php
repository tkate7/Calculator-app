<?php

    include_once "../Classes/Operations.php";

    $calc = new Operations((string) $_POST['operator'], (int) $_POST['first-num'], (int) $_POST['second-num']);  
    $result = $calc->calculate();
