<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $req){
        try{
           $data= User::create($req->all());

           return response()->json([
                "Status"=>true,
                "Message :"=>"User Register Sucessfully.....",
                " Data "=>$data,
            ]);

        }
        catch(Exception $e){
            return response()->json([
                "Status"=>false,
                "Message :"=>"Plese check your code or server",
                "Error :"=> $e->getMessage()
            ]);

        }
    }
}
