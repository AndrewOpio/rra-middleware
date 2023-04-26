<?php

    use model\Item\Item;
    
    $data=json_decode(file_get_contents("php://input"));

    $NewRequest = new Item;
    $result = $NewRequest->__send_item($data);
    
    print_r(json_encode($result));
