<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

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
        
        $order_details=[];

        $p_total = 0;

        for($i=0;$i<=2;$i++)
        {
            if(isset($request['pizza_quntity_'.$i]))
            {
                $p_total += $request['pizza_quntity_'.$i] * $request['pizza_size_'.$i]; 

                $onep_total = $request['pizza_quntity_'.$i] * $request['pizza_size_'.$i]; 

                array_push($order_details,['pizza_quntity'=>$request['pizza_quntity_'.$i],'pizza_size'=>$request['pizza_size_'.$i],'total'=>$onep_total]);

            }
        }

        $delevery_charg = $request['Delivery'];

        $total = $p_total + $delevery_charg;

        $bill_ditails=['Delivery_satate' => 1,'P_total'=>$p_total,'Delivery_charg'=>$delevery_charg,'total'=>$total];


        $datasave = Order::save_data($user_data);

        // return $datasave;
        exit;

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
