<?php

    function require_api_headers(): void
    {
        header('Access-Control-Allow-Credentials: true');
        header('Authorization: Bearer ');
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization, Source");
        header('Content-Type: application/json');
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            header('Access-Control-Allow-Origin: *');
            header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization, Source");
            header("HTTP/1.1 200 OK");
            die();
        }
    }
    
    
    function get_request_name($uri_depth=0)
    {
        $url=$_SERVER['REQUEST_URI'];
        $clean_url=explode("?", $url);
        $url=$clean_url[0];
        $request = explode("/", $url);
        $parts=[];
        foreach($request as $key=>$value)
        {
            if($key>$uri_depth)
            {
                $parts[]=$value;
            }
        }
        $request=implode("/", $parts);
        return $request;
    }

    
    function post_data_to_url($url, $data)
    {  
        $json = json_encode($data, JSON_PRETTY_PRINT);
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); // Do not send to screen
        curl_setopt($ch, CURLOPT_USERAGENT, 'ABACUS');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        $response=curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response);
        return $response;
    }


    /*{
        "tin":"999976940",
        "bhfId": "00",
        "sarNo":"0143892022",
        "orgSarNo":"0143892022",
        "regTyCd":"M",
        "custTin":null,
        "custNm":null,
        "custBhfId":null,
        "sarTyCd":"06",
        "ocrnDt":"20221216",
        "totItemCnt":"1",
        "totTaxblAmt":"564832",
        "totTaxAmt":"0",
        "totAmt":"564832",
        "remark":null,
        "regrId":"Admin",
        "regrNm":"Admin",
        "modrNm":"Admin",
        "modrId":"Admin",
        "itemList":[{
            "itemSeq":"1",
            "itemCd":"",
            "itemClsCd":"80141700",
            "itemNm":"Extradol Tabs 50x2's",
            "bcd":"",
            "pkgUnitCd":"CT",
            "pkg":"0",
            "qtyUnitCd":"PA",
            "qty":"200",
            "itemExprDt":null,
            "prc":"2824.16",
            "splyAmt":"564832",
            "totDcAmt":"0",
            "taxblAmt":"564832",
            "taxTyCd":"C",
            "taxAmt":"0",
            "totAmt":"564832"
        }]
    }


    {
        "tin":"999976940",
        "bhfId": "00",
        "sarNo":"010117892022",
        "orgSarNo":"010117892022",
        "regTyCd":"M",
        "custTin":null,
        "custNm":null,
        "custBhfId":null,
        "sarTyCd":"16",
        "ocrnDt":"20221216",
        "totItemCnt":"1",
        "totTaxblAmt":"1885.44",
        "totTaxAmt":"0",
        "totAmt":"1885.44",
        "remark":null,
        "regrId":"Admin",
        "regrNm":"Admin",
        "modrNm":"Admin",
        "modrId":"Admin",
        "itemList":[{
            "itemSeq":"1",
            "itemCd":"",
            "itemClsCd":"80141700",
            "itemNm":"Extradol Tabs 50x2's",
            "bcd":"",
            "pkgUnitCd":"CT",
            "pkg":"0",
            "qtyUnitCd":"PA",
            "qty":"1",
            "itemExprDt":null,
            "prc":"1885.44",
            "splyAmt":"1885.44",
            "totDcAmt":"0",
            "taxblAmt":"1885.44",
            "taxTyCd":"C",
            "taxAmt":"0",
            "totAmt":"1885.44"
        }]
    }*/