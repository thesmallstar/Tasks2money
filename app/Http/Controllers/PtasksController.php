<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PtasksController extends Controller
{

      public function __construct()
      {
          $this->middleware('auth');
      }

      public function index(){             
                  
       $ptask  = \App\Ptask::where('accepted', 0)->get(); 
                 return view('ptasks.home',compact('ptask'));
      }
   
      
       public function create(){


                 return view('ptasks.create');



       }


}




