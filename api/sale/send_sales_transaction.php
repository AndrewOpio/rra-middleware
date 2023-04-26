<?php

    use model\Sales\Sales;
    
    $data=json_decode(file_get_contents("php://input"));

    $NewRequest = new Sales;
    $result = $NewRequest->__send_sales_transaction($data);

    print_r(json_encode($data->spplrNm));
