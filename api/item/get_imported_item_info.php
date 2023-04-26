<?php

    use model\Item\ImportedItem;
    
    $data=json_decode(file_get_contents("php://input"));

    $NewRequest = new ImportedItem;
    $result = $NewRequest->__get_imported_items($data);
    
    print_r(json_encode($result));
