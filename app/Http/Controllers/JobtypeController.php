<?php

namespace App\Http\Controllers;

use App\Models\jobtype;
use Exception;
use Illuminate\Http\Request;

class JobtypeController extends Controller
{
//this is without try excep block method 
        //public function insert(Request $req){
        //jobtype::create($req->all());
        //return "Data is Inserted";
    //}

    //this is with try exception method


    public function insert(Request $req){
        try{
            $data=jobtype::create($req->all());
            return response()->json([
                "Status"=>true,
                "Message"=>"Data is Inderted......",
                "Data"=>$data
            ]);
        }

        catch(Exception $e){
            return response()->json([
                "status"=>false,
                "Message"=>"Data is not inserted Please check your code or server....."
                ,"Error"=> $e->getMessage()
            
            ]);

        }

    }        

    public function fetch(){
        try{
            $data=jobtype::all();
            return response()->json([
                "Status"=>true,
                "Data"=>$data
            ]);
        }

        catch(Exception $e){
            return response()->json([
                "status"=>false,
                "Message"=>"Data  not found....."
                ,"Error"=> $e->getMessage()
            
            ],404);

        }
    }

    public function delete($id){
        try{
            $data=jobtype::findOrfail($id);
            jobtype::destroy($data->id);
            return response()->json([
                "status"=>true,
                "Message"=>"data is deleted"
            ]);

        }
        catch(Exception $e){
            return response()->json([
                "status"=>false,
                "Message"=>"Data is not deleted",
                "error"=>$e->getMessage()
            ]);

        }
    }

   // public function update(Request $req,$id){
     //   $data=jobtype::findOrfail($id);
       // $data=jobtype::update($req->all());

    //}

    public function update(Request $req,$id)
{
    try {

        $data = jobtype::findOrFail($id);

        $data->update($req->all());

        return response()->json([
            "status" => true,
            "message" => "Data updated successfully",
            "data" => $data
        ]);

    } catch (Exception $e) {

        return response()->json([
            "status" => false,
            "message" => "Data not updated",
            "error" => $e->getMessage()
        ], 500);
    }
}
    
}
