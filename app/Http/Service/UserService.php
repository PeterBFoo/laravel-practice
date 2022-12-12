<?php

namespace App\Http\Service;

use Illuminate\Support\Facades\DB;

class UserService
{
    public function find($id)
    {
        return DB::table('users')->where('id', $id)->first();
    }
}
