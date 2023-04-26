<?php
    switch($request):
        case "send_stock"://send stock route
                include_once "api/stock/send_stock.php";//Send stock Endpoint
                exit;
            break;
        case "save_stock_master"://save stock master route
                include_once "api/stock/save_stock_master.php";//Save stock master Endpoint
                exit;
            break;
    endswitch;
