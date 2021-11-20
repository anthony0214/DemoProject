<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        dd(route('mya5Route'));
        //return "this is index";
    }

    public function a1(){ //passing single variable to view using ->with() method
        $myVariable1 = 'passing this 1st variable using with() method';
        $myVariable2 = 'passing this 2nd variable using with() method';
        $myAssocArray = [
            "array1Index" => "array1Value",
            "array2Index" => "array2Value",
            "array3Index" => "array3Value",
            "array4Index" => "array4Value",
        ];

        //return view('demo.a1')->with('myVariable',$myVariable); // passing single variable

        /* return view('demo.a1')
            ->with('myVariable1', $myVariable1)
            ->with('myVariable2', $myVariable2); // passing multiple single variable
        */
         return view('demo.a1')
            ->with('myVariable1', $myVariable1)
            ->with('myVariable2', $myVariable2) // passing multiple single variable and array
            ->with('myAssocArray', $myAssocArray); // passing associative array using with() method
    }



    public function a2(){ //passing single variable using ->compact() method
        $myVariable = 'passing this variable using compact() method';

        return view('demo.a2',compact('myVariable'));
    }

    public function a3(){ //passing multiple single variable using ->compact() method
        $myVariable = 'passing this variable using compact() method';
        $myVariable2 = "passing this 2nd variable using compact() method";
        return view('demo.a3',compact('myVariable','myVariable2'));
    }

    public function show($id){
        return $id; //get values from route to controller
    }

    public function a4($name){
        $data = [
            "iPhone" => 'This is iPhone',
            "samsung" => 'This is Samsung',
            "nokia" => 'This is Nokia',
        ];

        //return $data[$name]; //values $name is case sensitive it will return error if you put name that does not exist
        return $data[$name] ?? 'The '. $name . ' does not exist!'; //to fix the error when putting name that does not exist we use terniary operator (??)
    }

    public function a5(){
            

        return view('demo.a5');
    }
}
