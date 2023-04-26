<?php
/**
 * THIS IS THE APPLICATION ROUTER
 * 
 * ALL ENDPOINTS SHOULD BE INCLUDED IN THE api FOLDER
 */
    include_once "include/autoloader.php";
    include_once "include/functions.php";
    $request=get_request_name($uri_depth=1);
    
    include_once "routes/route_data.php";
    include_once "routes/route_item.php";
    include_once "routes/route_purchase.php";
    include_once "routes/route_sales.php";
    include_once "routes/route_stock.php";
    include_once "routes/route_initialize.php";

    include_once "api/404.php";
?>