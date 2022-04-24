<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactTableModel;

class ContactTableController extends Controller
{
    function onContactSend(Request $req){

      $name=$req->input('name');
      $email=$req->input('email');
      $msg=$req->input('msg');

      $reault=ContactTableModel::insert(['name'=>$name,'email'=>$email,'message'=>$msg]);
      if($reault==true){
          return 1;
      }
      else{
          return 0;
      }
    
    
       }
}
