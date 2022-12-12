<?php

namespace App\Http\Controllers;

use App\Http\Service\UserService;

class UserController extends Controller
{
    public function getUser($id)
    {
        return (new UserService)->find($id);
    }
}
