<?php

    use model\Purchase\Purchase;
    
    $data=json_decode(file_get_contents("php://input"));

    $NewRequest = new Purchase;
    $result = $NewRequest->__get_purchase_transaction($data);

    print_r(json_encode($result));
