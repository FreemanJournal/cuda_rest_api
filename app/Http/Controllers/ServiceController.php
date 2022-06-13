<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    function onSelectAll(){
        $result = Service::all();
        return $result;
    }
}
