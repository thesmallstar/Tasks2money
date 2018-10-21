@extends('layouts.app')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
@section('content')
<div class="container">
  <button type="button" class="btn btn-warning"  onclick="window.location.href='/whattt/public/tasks'">Home</button>
  &nbsp;


   
   


    <button type="button" class="btn btn-primary"  onclick="window.location.href='/whattt/public/tasks/create'">Add a new Task</button>
    &nbsp;
    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/completed'">Completed Tasks</button>



    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/performing'">Performing tasks</button>
    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/waiting'">Awaited Confirmation</button>
<br>
<br>
  
@if( Session::has('msg'))
<div class="alert alert-success">
{!! Session::has('msg') ? Session::get("msg") : '' !!}

</div>
@endif
<br>
<div class="card">
    <br>
    <ul class="nav  center justify-content-center">
    <h2>
       Task Requests</h2>
       
         </ul>
  <div class="card-body">
  
      <hr>
      
      <div class="tab-content">
      <? $Session['a']=0;?>                 
  
        @foreach ($taskstaken as $item)
        @if(!$item->acpstat)
                      <div class="row">
          <div class="col-2">
<img src="http://localhost/whattt/public/images/{{$item->giver}}.jpg"  style= " border-radius: 50%; height:100px; width:100px;">

<br>

Given by user : {{$item->giver}}    <br>   
Max Days: {{ $item-> maxdays}}   

</div>
          
          <div class="col-10">
            <h3>

           {{($item->body)}}
        
          </h3>
          Task reward : ${{$item->value}}<br>

           @if($item->dispute_solver)
                The dispute Solver is assigned to be : {{$item->dispute_solver}}         
     <br> <p class="text-danger">Do not accept the task, if you do not trust the Dispute Solver.</p>
                @endif
        <br>
       
              <button class="btn-success btn" onclick="window.location.href='/whattt/public/tasks/accept/{{$item->id}}'">
               Accept Task

              </button>
            
              <button class="btn-danger btn" onclick="window.location.href='/whattt/public/tasks/delete/{{$item->id}}'">
                Reject Task
 
               </button>
            </div>
            <br>
        
         
       

          </div>
          </div>
          <br>
         
         @endif
        @endforeach
      
        
        </div>
        </div>

    </div>
       
      </div>
    
    
    
</div>


@endsection