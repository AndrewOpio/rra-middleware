<?php

    namespace model\Item;
    use model\App;

    class Item extends App
    {
        //send and update item information
        public function __send_item($data)
        {
            $url = $this->Base."/items/saveItems";
            $response = post_data_to_url($url, $data);
            return $response;
        }

        //send and update item composition information
        public function __send_item_composition($data)
        {
            $url = $this->Base."/items/saveItemComposition";
            $response = post_data_to_url($url, $data);
            return $response;
        }
    }