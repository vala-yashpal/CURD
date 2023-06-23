<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill_ditails extends Model
{
    use HasFactory;
    public static function save_data_bill($data)
    {
    
      return  $id = DB::table('bill_ditails')->insertGetId($data);
    }
}
