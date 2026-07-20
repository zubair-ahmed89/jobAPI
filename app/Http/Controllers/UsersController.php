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

    public function create(Request $req){
        $tec=new teacher();
        $tec->name=$req->name;
        $tec->age=$req->age;
        $tec->qualification=$req->qualification;
        $tec->course_id=$req->course_id;
        if($tec->save()){
            return ['success'=>true,'msg'=>"Employee Is Created"];
        }

        else{
            return ['success'=>false,'msg'=>"Employee Is Not Created"];
        }
        

        
    }
}
