<?php
   use model\Investment\Investment;

   require_api_headers();
   $data=json_decode(file_get_contents("php://input"));
   require_api_data($data, ['name', 'amount']);
   
   
   $NewInvestment=new Investment;
   $result=$NewInvestment->__invest(clean($data->name), clean($data->amount));
   
   if ($result) 
   {
        $info=array(
            'status' => "OK",
            'message'=>$NewInvestment->Success,
            'details' =>[$result]
        );
   } 
   else 
   {
        $info=array(
            'status' => 'Fail',
            'message'=>$NewInvestment->Error,
            'details' =>[$result]
        );
   }

   print_r(json_encode($info));
   