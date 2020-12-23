<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManagersBuildings;
use Validator;

class ManagersBuildingsController extends Controller
{


    public function JoinBuildingsManagers()
    {

        return ManagersBuildings::with(['Manager'])->get();
    }
    public function list_managers_buildings($id = null)
    {

        $manbuild = $id ? ManagersBuildings::find($id) : ManagersBuildings::all();
        return $manbuild;
    }

    public function search($name)
    {

        return ManagersBuildings::where("building_id", "like", "%" . $name . "%")->orWhere("manager_id", "like", "%" . $name . "%")->get();
    }

    function add(Request $request)
    {

        $rules = array(
            "manager_id" => "required",
            "building_id" => "required",


        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {

            $elevator = new ManagersBuildings;
            $elevator->building_id = $request->building_id;
            $elevator->manager_id = $request->manager_id;
            $result = $elevator->save();

            if ($result) {

                return ['Result' => "Data has been saved"];
            } else {

                return ['Result' => "Operation Failed"];
            }
        }

        // return ["result"=>$request->address];


    }


    function update(Request $request)
    {


        $rules = array(
            "id" => "required",
            "manager_id" => 'required',
            "building_id" => "required",

        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $elevator = ManagersBuildings::find($request->id);
            $elevator->id = $request->id;
            $elevator->manager_id = $request->manager_id;
            $elevator->building_id = $request->building_id;

            $result = $elevator->save();

            if ($result) {

                return ['Result' => "Data has been saved"];
            } else {

                return ['Result' => "Operation Failed"];
            }
        }





        // return ["result"=>$request->address];


    }


    public function delete($id)
    {

        $elevator = ManagersBuildings::find($id);
        $result = $elevator->delete();
        if ($result) {

            return ["result" => "record has been deleted"];
        } else {
            return ["result" => "delete operation is failed"];
        }
        // return Building::where("name","like","%".$name."%")->orWhere("address","like","%".$name."%")
        // ->orWhere("floors","like","%".$name."%")->orWhere("contact_number","like","%".$name."%")->get();


    }
}
