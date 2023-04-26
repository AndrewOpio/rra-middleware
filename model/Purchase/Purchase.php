<?php

    namespace model\Purchase;
    use model\App;

    class Purchase extends App
    {
        //send purchase transaction information
        public function __send_purchase_transaction($data)
        {
            $url = $this->Base."/trnsPurchase/savePurchases";
            $response = post_data_to_url($url, $data);
            return $response;
        }

        //get purchase transaction information
        public function __get_purchase_transaction($data)
        {
            $data->lastReqDt = date('YmdHis', strtotime($data->lastReqDt));
            $url = $this->Base."/trnsPurchase/selectTrnsPurchaseSales";
            $response = post_data_to_url($url, $data);
            return $response;
        }
    }