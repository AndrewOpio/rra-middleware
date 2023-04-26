<?php

    namespace model\Data;
    use model\App;

    class Data extends App
    {
        //update branch information
        public function __send_branch_info($data)
        {
            $url = $this->Base."/branches/saveBrancheUsers";
            $response = post_data_to_url($url, $data);
            return $response;
        }

        //sending customer details
        public function __send_customer_info($data)
        {
            $url = $this->Base."/branches/saveBrancheCustomers";
            $response = post_data_to_url($url, $data);
            return $response;
        }

        //fetch notifications
        public function __get_notifications($data)
        {
            $url = $this->Base."/notices/selectNotices";
            $response = post_data_to_url($url, $data);
            return $response;
        }

        //query and update item classification codes
        public function __item_classification_codes($data)
        {
            $url = $this->Base."/itemClass/selectItemsClass";
            $response = post_data_to_url($url, $data);
            return $response;
        }

        //query and update common standard code list
        public function __standard_code_list($data)
        {
            $url = $this->Base."/code/selectCodes";
            $response = post_data_to_url($url, $data);
            return $response;
        }

        //extract up-to date TIN list
        public function __tin_list($data)
        {
            $url = $this->Base."/customers/selectCustomer";
            $response = post_data_to_url($url, $data);
            return $response;
        }
        
    }