<?php

namespace App\Http\Controllers;

use App\Models\user_data;
use App\Models\order;
use App\Models\bill_ditails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $user_data = array('user_name'=>$request['user_name'],'email'=>$request['email'],'contact_number'=>$request['contact_number'],'addre'=>$request['addre']);
        
        $user_datasave = user_data::save_data_user($user_data);

        

        $order_details=[];
        $p_total = 0;

        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $order_id = generateRandomString();

        for($i=0;$i<=2;$i++)
        {
            if(isset($request['pizza_quntity_'.$i]))
            {
                $p_total += $request['pizza_quntity_'.$i] * $request['pizza_size_'.$i]; 

                $onep_total = $request['pizza_quntity_'.$i] * $request['pizza_size_'.$i]; 

                array_push($order_details,['user_id'=>$user_datasave, 'order_uniq_id'=>$order_id,'pizza_quntity'=>$request['pizza_quntity_'.$i],'pizza_size'=>$request['pizza_size_'.$i],'total'=>$onep_total]);

            }
        }

        
       $bill_data= order::save_data_order($order_details);
       
       
        $delevery_charg = $request['Delivery'];
        $total = $p_total + $delevery_charg;
        $bill_ditails=['user_id'=>$user_datasave,'order_uniq_id'=>$order_id,'Delivery_satate' => 1,'Pizza_total'=>$p_total,'Delivery_charg'=>$delevery_charg,'total'=>$total];
        $bill_data= bill_ditails::save_data_bill($bill_ditails);

        // echo "<pre>";
        // print_r($user_data);
        // print_r($order_details);
        // print_r($bill_ditails);
        // echo "</pre>";
        // exit;

        // $order_all_ditails = DB::table('user_datas as ud')->
        //     select('ud.*','orders.*','bd.*')
        //     ->rightjoin('orders','ud.id','=','orders.user_id')
        //     ->rightjoin('bill_ditails as bd','bd.user_id','=','orders.user_id')
        //     ->where('ud.id','=', $user_datasave)->get();

        //     echo "<pre>";
        //     print_r($order_all_ditails);
        //     echo "</pre>";
        //     exit;
        return  $bill_data;
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
}
