<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\footerTableModel;

class FooterTableController extends Controller
{
    function onSelect(){
        $result=footerTableModel::get();
        return   $result;
    }
}
