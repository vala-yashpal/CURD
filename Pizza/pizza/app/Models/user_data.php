<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_data extends Model
{
    use HasFactory;

    public static function save_data_user($data)
    {
      return  $id = DB::table('user_datas')->insertGetId($data);
    }
}
