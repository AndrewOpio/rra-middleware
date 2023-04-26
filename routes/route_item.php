<?php
    switch($request):
        case "save_items"://add items route
                include_once "api/item/send_item.php";//Add items Endpoint
                exit;
            break;

        case "save_item_composition"://add item composition route
                include_once "api/item/send_item_composition.php";//Add item composition Endpoint
                exit;
            break;

        case "send_imported_items"://add imported items route
                include_once "api/item/send_imported_item_info.php";//Add imported items Endpoint
                exit;
            break;

        case "get_imported_items"://get imported items route
                include_once "api/item/get_imported_item_info.php";//Add imported items Endpoint
                exit;
            break;
    endswitch;
