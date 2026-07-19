<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function fatch(){
       // $data=['id'=>1,'name'=>'zubair','age'=>37];
       $data=teacher::all();
        return $data;
    }
}
