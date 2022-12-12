<?php

namespace App\Http\Controllers;

use App\Http\Service\CommunityService;

class CommunityController extends Controller
{
    public ?CommunityService $communities = null;

    public function index()
    {
        if ($this->communities == null) {
            $this->communities = new CommunityService;
        }
        return view('communities', ['communities' => $this->communities->getCommunities()]);
    }
}
