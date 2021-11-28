<?php

namespace model\Investment;

use model\App;

class Investment extends App
{
    public function __invest($name, $amount)
    {
        $query = "INSERT INTO tbl_investment (name, amount) VALUES('$name', '$amount')";
        $result = mysqli_work_insert($query);

        if ($result) {
            $this->Success = "Success";
            return $result;
        }

        $this->Error = "Failed";
        return false;
    }
}
   