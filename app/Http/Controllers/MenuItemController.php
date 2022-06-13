<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    function onSelectAll(){
        $result = MenuItem::all();
        return $result;
    }
}
