<?php

namespace App\Http\Controllers;

use App\Models\UsedTechnology;
use Illuminate\Http\Request;

class UsedTechnologyController extends Controller
{
    function onSelectAll(){
        $result = UsedTechnology::all();
        return $result;
    }
}
