<?php

namespace App\Http\Controllers;

use App\Models\TeamSocialMedia;
use Illuminate\Http\Request;

class TeamSocialMediaController extends Controller
{
    function onSelectAll(){
        $result = TeamSocialMedia::all();
        return $result;
    }
}
