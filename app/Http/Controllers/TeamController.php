<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function onSelectAll(){
        $result = Team::all();
        return $result;
    }
}
