<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller


{

  public function __construct()
  {
      $this->middleware('auth');
  }
    

     Public function index(){
     

        $tasksgiven = \Auth::user()->tasksgiven;

       

        return view("user.tasks.tasks", compact('tasksgiven'));


     }

     Public function create(){


        return view("user.tasks.create");

        
     }

     
     Public function addnewtask($user){

     
             $giver=\App\user::find($user);
           
             $taker = \App\User::where('phn', request('phone'))->get();
             $new=\App\user::find($user);
             $dispute  = \App\User::where('phn', request('dispute'))->get(); 
            $new->money= $new->money - request('value'); 
            if($new->money<0){
              session()->flash('msg', 'Insufficient Funds.');
              return redirect()->back(); 
            }
            $new->save();
      
             
             $task= new \App\task;
             $task->body=request('body');
             $task->giver= $giver->id;
             $task->taker= $taker[0]->id;
             $task->value= request('value');
             $task->maxdays= request('maxdays');
             $task->dispute_solver = $dispute[0] -> id;
              $task->save();
           
     
       session()->flash('msg', 'Successfully added the task! ');
       return redirect()->back();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
     
     }
     Public function completed(){
            

        $tasksgiven = \Auth::user()->tasksgiven;

       

        return view("user.tasks.completed", compact('tasksgiven'));
     


     }

     Public function requests(){
           
        $taskstaken = \Auth::user()->taskstaken;
        return view("user.tasks.requests", compact('taskstaken'));
     

         
            
          


     }

     Public function performing(){
           
        $taskstaken = \Auth::user()->taskstaken;
        return view("user.tasks.performingtasks", compact('taskstaken'));
     

         
            
          


     }

     Public function waiting(){
           
        $taskstaken = \Auth::user()->taskstaken;
        return view("user.tasks.waiting", compact('taskstaken'));
      }

      Public function verify($id){
        
        $task = \App\Task::find($id);
        $task -> cmpstatnew = 1;
        $task-> save();
        $user = $task->taker;
        $man = \App\user::find($user);

        $man->money= $man->money+$task->value;
        $man->save();
          
       session()->flash('msg', 'Successfully added the task! ');
       return redirect()->back();

      }
      Public function delete($id){
        
        $task = \App\Task::find($id);
        $task -> cmpstatnew = 1;
        $task-> delete();
          
       session()->flash('msg', 'The Task has been Deleted ');
       return redirect()->back();

      }
 
      Public function accept($id){
        
        $task = \App\Task::find($id);
        $task -> acpstat = 1;
        $task-> save();
          
       session()->flash('msg', 'The task is now accepted. ');
       return redirect()->back();

      }

      Public function complete($id){
        
        $task = \App\Task::find($id);
        $task -> comstat = 1;
        $task-> save();
          
       session()->flash('msg', 'The task is now marked as complete, and awaiting confirmation.');
       return redirect()->back();

      }

      Public function dispute(){
       
          $task = \App\task::all();

          return view ("user.tasks.dispute",compact('task'));
 
         
  
        }
        Public function solve($id){
       
          $task = \App\task::find($id); 
          $taker= $task -> taker;
          
          $user=\App\user::find($taker);

          $user->money=$user->money+ $task->value;

          $user->save();
          $task-> delete();

          return redirect()->back();
 
 
        }


            Public function disputed($id)
        {
       
          $task = \App\task::find($id); 
          $giver= $task -> giver;
          
          $user=\App\user::find($giver);

          $user->money=$user->money+ $task->value;

          $user-> save();
          $task-> delete();

          return redirect()->back();


 
         
  
        }

 

    }  