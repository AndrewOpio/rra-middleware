<?php

    use model\Item\ImportedItem;
    
    $data=json_decode(file_get_contents("php://input"));

    $NewRequest = new ImportedItem;
    $result = $NewRequest->__send_imported_item($data);
    
    print_r(json_encode($result));
