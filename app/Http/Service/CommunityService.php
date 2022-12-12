<?php

namespace App\Http\Service;

use App\Models\Community;

class CommunityService
{
    public function getCommunities()
    {
        return Community::all();
    }
}
