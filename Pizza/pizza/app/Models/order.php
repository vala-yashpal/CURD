<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public static function save_data_order($data)
    {
      
       // return  $id = DB::table('')->insert($data);
       return  DB::table('orders')->insert($data);
    }
}
