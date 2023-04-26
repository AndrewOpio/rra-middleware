<?php

    use model\Data\Data;
    
    $data=json_decode(file_get_contents("php://input"));

    $NewRequest = new Data;
    $result = $NewRequest->__item_classification_codes($data);

    print_r(json_encode($result));
