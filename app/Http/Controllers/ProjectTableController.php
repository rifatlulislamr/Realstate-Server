<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectTableModel;

class ProjectTableController extends Controller
{
   function onSelect3(){
       $result=ProjectTableModel::limit(3)->get();
       return $result;
   }

   function onSelectAll(){
    $result=ProjectTableModel::all();
    return $result;
}

function onSelectDetails(Request $req){
   $id= $req->input('id');
    $result=ProjectTableModel::where(['id'=>$id])->get();
    return $result;
}



}
