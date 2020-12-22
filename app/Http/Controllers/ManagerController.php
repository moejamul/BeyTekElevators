<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
use Validator;

class ManagerController extends Controller
{


    public function JoinBuildingsManagers(){

        return Manager::with(['Building'])->get();

    }
    public function list_managers($id=null){

        $manager= $id?Manager::find($id):Manager::all();
        return $manager;


    }

    public function search($name){

        return Manager::where("name","like","%".$name."%")->orWhere("phone_number","like","%".$name."%")
        ->orWhere("address","like","%".$name."%")->orWhere("profile_picture","like","%".$name."%")->get();


    }

    function add(Request $request){
        
        $rules=array(
            "name"=>"required",
            "phone_number"=>"required",
            "address"=>"required",
            "profile_picture"=>"required",
    
        );
        
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
            
        }else{
           
        $manager= new Manager;
        $manager->name= $request->name;
        $manager->phone_number= $request->phone_number;
        $manager->address= $request->address;
        $manager->profile_picture= $request->profile_picture;
        $result=$manager->save();
    
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
            "phone_number"=>"required",
            "address"=>"required",
            "profile_picture"=>"required",
            
        );
        
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
            
        }else{
            
            $manager= Manager::find($request->id);
            $manager->name= $request->name;
            $manager->phone_number= $request->phone_number;
            $manager->address= $request->address;
            $manager->profile_picture= $request->profile_picture;
            $result=$manager->save();
    
        if($result){
    
            return ['Result'=>"Data has been saved"];
        }else{
    
            return ['Result'=>"Operation Failed"];
        }
        }
        


       
    
        // return ["result"=>$request->address];
    
        
    }

    public function delete($id){

        $manager= Manager::find($id);
        $result= $manager->delete();
        if($result){

            return ["result"=>"record has been deleted"];
        }else{
            return ["result"=>"delete operation is failed"];
        }
        // return Building::where("name","like","%".$name."%")->orWhere("address","like","%".$name."%")
        // ->orWhere("floors","like","%".$name."%")->orWhere("contact_number","like","%".$name."%")->get();

       
    }

}
