<?php
    switch($request):
        case "initialize"://vsdc initialize route
                include_once "api/initialize.php";//Initialize Endpoint
                exit;
            break;
    endswitch;
