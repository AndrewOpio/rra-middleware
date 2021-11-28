<?php
    switch($request):
        case "app/investment"://investment route
                include_once "api/invest.php";//Investment Endpoint
                exit;
            break;
    endswitch;