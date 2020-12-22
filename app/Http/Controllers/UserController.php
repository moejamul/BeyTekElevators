<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    function add(Request $request){
        
        $rules=array(
            "name"=>"required",
            "email"=>'required',
            "password"=>"required",
           
        );
        
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
            
        }else{
           
        $user= new User;
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= $request->password;
        // $buildings->contact_number= $request->contact_number;
        $result=$user->save();
    
        if($result){
    
            return ['Result'=>"Data has been saved"];
        }else{
    
            return ['Result'=>"Operation Failed"];
        }
    
        }
 
        // return ["result"=>$request->address];
    
        
    }

}
