<?php

    namespace model\Stock;
    use model\App;

    class Stock extends App
    {
        //send and update stock in/out information
        public function __send_stock($data)
        {
            $url = $this->Base."/stock/saveStockItems";
            $response = post_data_to_url($url, $data);
            return $response;
        }

        //save stock master information
        public function __save_stock_master($data)
        {
            $url = $this->Base."/stockMaster/saveStockMaster";
            $response = post_data_to_url($url, $data);
            return $response;
        }
    }