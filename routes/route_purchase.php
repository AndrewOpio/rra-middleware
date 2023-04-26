<?php
    switch($request):
        case "send_purchase_transaction"://send purchase transaction route
                include_once "api/purchase/send_purchase_transaction.php";//Send purchase transaction Endpoint
                exit;
            break;

        case "get_purchase_transaction"://get purchase transaction route
                include_once "api/purchase/get_purchase_transaction.php";//Get purchase transaction Endpoint
                exit;
            break;
    endswitch;

