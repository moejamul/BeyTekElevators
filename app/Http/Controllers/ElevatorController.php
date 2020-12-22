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

    public function JoinBuildingsElevators(){

        return Elevator::with(['Building'])->get();
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

    public function delete($id){

        $elevator= Elevator::find($id);
        $result= $elevator->delete();
        if($result){

            return ["result"=>"record has been deleted"];
        }else{
            return ["result"=>"delete operation is failed"];
        }
        // return Building::where("name","like","%".$name."%")->orWhere("address","like","%".$name."%")
        // ->orWhere("floors","like","%".$name."%")->orWhere("contact_number","like","%".$name."%")->get();

       
    }

}
