<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ciudad;

class CityController extends Controller
{
    public function index(){

        $data=Ciudad::all();

        return view('home', compact('data'));

    }



    public function destinations(){

        $data=Ciudad::all();

        return view('cities', compact('data'));

    }


    public function details($id){

        $data=Ciudad::find($id);

        return view('details', compact('data'));
    }


    
    public function search(Request $request){

        $search=$request->search;
   
           if ($search =='') {
               $data =Ciudad::all();
               return view('cities', compact('data'));
           }
   
           $data=Ciudad::where('namecity','Like','%'.$search.'%')->get();
           return view('cities', compact('data'));
   
       }



}
