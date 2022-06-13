<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralInfo;

class GeneralInfoController extends Controller
{
   function onSelectAll(){
       $result = GeneralInfo::all();
       return $result;
   }
}
