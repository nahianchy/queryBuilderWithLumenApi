<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class QueryBuilderController extends Controller
{
    function select()
    {

        $result = DB::table('details')->get();
        return $result;
    }


    function insert(Request $request)
    {

        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phone = $request->input("phone");
        $class = $request->input("class");


        $result = DB::table('details')->insert(
            [
                'name' => $name,
                'roll' => $roll,
                'city' => $city,
                'phone' => $phone,
                'class' => $class
            ]
        );

        if ($result == 1) {
            return "data inserted";
        } else {
            return "data not inserted";
        }
    }

    function update(Request $request)
    {
        $id =    $request->input("id");
        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phone = $request->input("phone");
        $class = $request->input("class");


        $result = DB::table('details')->where('id', $id)->update(
            [
                'name' => $name,
                'roll' => $roll,
                'city' => $city,
                'phone' => $phone,
                'class' => $class
            ]
        );

        if ($result == 1) {
            return "data updated";
        } else {
            return "data not updated";
        }
    }
    function delete(Request $request)
    {
        $id =$request->input("id");
        $result=DB::table('details')->where('id',$id)->delete();

        if ($result == 1) {
            return "data deleted";
        } else {
            return "data not deleted";
        }

    }
}
