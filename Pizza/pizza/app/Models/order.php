<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public static function save_data($data)
    {
       
      return  $id = DB::table('users')->insertGetId($data);
    }
}
