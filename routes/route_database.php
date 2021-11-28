<?php
    switch($request):
        case "app/db.run"://database route
                include_once "db_structure/database.php";//Database Endpoint
                exit;
            break;    
    endswitch;