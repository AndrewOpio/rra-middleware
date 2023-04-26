<?php

    use model\Stock\Stock;
    
    $data=json_decode(file_get_contents("php://input"));

    $NewRequest = new Stock;
    $result = $NewRequest->__save_stock_master($data);

    print_r(json_encode($result));


