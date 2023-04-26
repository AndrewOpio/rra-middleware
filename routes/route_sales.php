<?php
    switch($request):
        case "send_sales_transaction"://send sales transaction route
                include_once "api/sale/send_sales_transaction.php";//Send sales transaction Endpoint
                exit;
            break;
        
    endswitch;
