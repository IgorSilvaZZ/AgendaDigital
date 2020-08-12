<?php

    include "vendor/autoload.php";
    include ".config.php";

    use Library\Route\Router;
    use Library\Route\Dispatch;

    $dispatch = new Dispatch();