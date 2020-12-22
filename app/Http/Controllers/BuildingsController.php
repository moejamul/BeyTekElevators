<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use Validator;

class BuildingsController extends Controller
{
    

    public function list_buildings($id=null){

        $buildings= $id?Building::find($id):Building::all();
        return $buildings;


    }

    public function JoinBuildingsElevators(){

        return Building::with(['Elevator'])->get();
    }




    public function search($name){

        return Building::where("name","like","%".$name."%")->orWhere("address","like","%".$name."%")
        ->orWhere("floors","like","%".$name."%")->orWhere("contact_number","like","%".$name."%")->get();


    }

    function testdata(Request $request){

        $rules=array(
            "floors"=>"required"
        );
        
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
            
        }else{
            return ["Result"=>"validated"];
        }
        

    }

    

    public function delete($id){

        $building= Building::find($id);
        $result= $building->delete();
        if($result){

            return ["result"=>"record has been deleted"];
        }else{
            return ["result"=>"delete operation is failed"];
        }
        // return Building::where("name","like","%".$name."%")->orWhere("address","like","%".$name."%")
        // ->orWhere("floors","like","%".$name."%")->orWhere("contact_number","like","%".$name."%")->get();

        return ["result"=>"record have been deleted"];
    }



    function add(Request $request){
        
        $rules=array(
            "floors"=>"required",
            "name"=>'required',
            "address"=>"required",
            "contact_number"=>"required"
        );
        
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
            
        }else{
           
        $buildings= new Building;
        $buildings->name= $request->name;
        $buildings->address= $request->address;
        $buildings->floors= $request->floors;
        $buildings->contact_number= $request->contact_number;
        $result=$buildings->save();
    
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
            "floors"=>"required",
            "name"=>'required',
            "address"=>"required",
            "contact_number"=>"required"
        );
        
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
            
        }else{
            $buildings= Building::find($request->id);
            $buildings->name= $request->name;
            $buildings->address= $request->address;
            $buildings->floors= $request->floors;
            $buildings->contact_number= $request->contact_number;
            $result=$buildings->save();
        
            if($result){
        
                return ['Result'=>"Data has been saved"];
            }else{
        
                return ['Result'=>"Operation Failed"];
            }
        }
        


       
    
        // return ["result"=>$request->address];
    
        
    }

    

   

    
}
