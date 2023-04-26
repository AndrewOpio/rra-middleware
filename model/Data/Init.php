<?php

    namespace model\Data;
    use model\App;

    class Init extends App
    {
        //initialize equipment
        public function __initialize($data)
        {
            $url = $this->Base."/initializer/selectInitInfo";
            $response = post_data_to_url($url, $data);
            return $response;
        }

    }