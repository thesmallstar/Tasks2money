<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return  redirect ('http://localhost/whattt/public/tasks');
    }
 

    public function addmoney()
    {
        return view('user.add-money');
    }

    public function paysecurely($user){
        $new=\App\user::find($user);

        $new->money= $new->money + request('value'); 
  $new->save();

  session()->flash('msg', 'Successfully added money!');
  return redirect()->back();
  
}

}
