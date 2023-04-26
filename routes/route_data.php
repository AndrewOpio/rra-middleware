<?php
    switch($request):
        case "standard_code_list"://standard code list route
                include_once "api/data/standard_code_list.php";//Standard code list Endpoint
                exit;
            break;
        case "item_classification_codes"://item classification codes route
                include_once "api/data/item_classification_codes.php";//Item classification codes Endpoint
                exit;
            break;
        case "tin_list"://tin list route
                include_once "api/data/tin_list.php";//Tin list Endpoint
                exit;
            break;
        case "branch_info"://branch info route
                include_once "api/data/branch_info.php";//Branch info Endpoint
                exit;
            break;
        case "get_notifications"://get notifications route
                include_once "api/data/get_notifications.php";//Get notifications Endpoint
                exit;
            break;
        case "customer_info"://customer info route
                include_once "api/data/customer_info.php";//Customer info Endpoint
                exit;
            break;

    endswitch;

