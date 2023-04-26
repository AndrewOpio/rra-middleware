<?php

    namespace model\Sales;
    use model\App;

    class Sales extends App
    {   //send sales transaction information
        public function __send_sales_transaction($data)
        {
            $url = $this->Base."/trnsSales/saveSales";
            $response = post_data_to_url($url, $data);
            return $response;
        }
    }