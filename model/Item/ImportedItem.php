<?php

    namespace model\Item;
    use model\App;

    class ImportedItem extends App
    {
        //send imported item information
        public function __send_imported_item($data)
        {
            $url = $this->Base."/imports/updateImportItems";
            $response = post_data_to_url($url, $data);
            return $response;
        }

        //fetch imported item information
        public function __get_imported_items($data)
        {
            $urlo = $this->Base."/imports/selectImportItems";
            $response = post_data_to_url($url, $data);
            return $response;
        }
    }


/*for each row
DECLARE
  req utl_http.req;
  res utl_http.resp;
  data varchar2(4000);
  json_obj json_object_t;
  res_text  VARCHAR2(32767);
  code  VARCHAR2(256);
  message  VARCHAR2(256);
  res_date  VARCHAR2(256);
  timestamp  VARCHAR2(256);
  status  VARCHAR2(256);
  error  VARCHAR2(256);
  url varchar2(100) := 'http://192.168.0.144:81/abacus_rra_middleware/send_imported_items';
  
BEGIN       
      data := '{
        "tin":"999976940",
        "bhfId":"00",
        "taskCd":"2231943",
        "dclDe":"'|| TO_CHAR(:new.DT_MOD_DATE, 'YYYYMMDD') ||'",
        "itemSeq":"'|| TO_CHAR(TRIM(LEADING 0 FROM SUBSTR(:new.VC_PRODUCT_CODE,5,6))) ||'",
        "hsCd":"3004",
        "itemClsCd":"'|| :new.VC_CLASSIFICATION ||'",
        "itemCd":"'|| :new.vc_product_code ||'",
        "imptItemSttsCd":"IN",
        "remark":null,
        "modrNm":"Admin",
        "modrId":"Admin"     
      }';
    
      req := utl_http.begin_request(url, 'POST', 'HTTP/1.1');
      utl_http.set_header(req, 'content-type', 'application/json');
      utl_http.set_header(req, 'Content-Length', length(data));
      
      utl_http.write_text(req, data);
      res := utl_http.get_response(req);
    
      utl_http.read_text(res, res_text);
      json_obj := json_object_t(res_text);
      
      code :=  json_obj.get_string('resultCd');
      message :=  json_obj.get_string('resultMsg');
      res_date :=  json_obj.get_string('resultDt');
    
      timestamp :=  json_obj.get_string('timestamp');
      status :=  json_obj.get_string('status');
      error :=  json_obj.get_string('error');
      
      INSERT INTO RRA_IMPORTED_ITEMS_RES (CODE, MSG, DTE, TIMESTAMP, STATUS, ERROR, JSON) VALUES (code, message, res_date, timestamp, status, error, data);  
      
      utl_http.end_response(res);
END;*/
