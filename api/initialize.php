<?php

    use model\Data\Init;
    
    $NewRequest = new Init;

    $data=[];
    $data["tin"] = "999976940";
    $data["bhfId"] = "01";
    $data["dvcSrlNo"] = "abacuswarvsdctest1";

    $result = $NewRequest->__initialize($data);
    file_put_contents("data.txt", json_encode($result));

    print_r(json_encode($result));

    //echo "Result Code:  ".$result->resultCd."<br/><br/>";
    //echo "Result Message:  ".$result->resultMsg;
