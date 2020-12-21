<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Elevator;
use Validator;

class ElevatorController extends Controller
{
    

    public function list_elevators($id=null){

        $elevator= $id?Elevator::find($id):Elevator::all();
        return $elevator;


    }

    public function search($name){

        return Elevator::where("name","like","%".$name."%")->orWhere("index","like","%".$name."%")->get();


    }


    function add(Request $request){
        
        $rules=array(
            "index"=>"required",
            "name"=>"required",
            "building_id"=>"required",
    
        );
        
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
            
        }else{
           
        $elevator= new Elevator;
        $elevator->name= $request->name;
        $elevator->index= $request->index;
        $elevator->building_id= $request->building_id;
        $result=$elevator->save();
    
        if($result){
    
            return ['Result'=>"Data has been saved"];
        }else{
    
            return ['Result'=>"Operation Failed"];
        }
    
        }
 
        // return ["result"=>$request->address];
    
        
    }


    function update(Request $request){
        

        $rules=array(
            "id"=>"required",
            "name"=>'required',
            "building_id"=>"required",
            
        );
        
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
            
        }else{
            $elevator= Elevator::find($request->id);
        $elevator->name= $request->name;
        $elevator->index= $request->index;
        $elevator->building_id= $request->building_id;
       
        $result=$elevator->save();
    
        if($result){
    
            return ['Result'=>"Data has been saved"];
        }else{
    
            return ['Result'=>"Operation Failed"];
        }
        }
        


       
    
        // return ["result"=>$request->address];
    
        
    }
}
