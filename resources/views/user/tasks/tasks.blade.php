@extends('layouts.app')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
@section('content')
<div class="container">


    <button type="button" class="btn btn-warning"  onclick="window.location.href='/whattt/public/tasks/create'">Add a new Task</button>
    &nbsp;
    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/completed'">Completed Tasks</button>

    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/requests'">Tasks Requests</button>

    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/performing'">Performing tasks</button>
    <button type="button" class="btn btn-defualt" onclick="window.location.href='/whattt/public/tasks/waiting'">Awaited Confirmation</button>
    <button type="button" class="btn btn-danger" onclick="window.location.href='/whattt/public/tasks/dispute'">Disputes</button>

    <br>
<br>
<div class="card">

  <div class="card-body">
    <ul class="nav  center justify-content-center">
     
     <h2>  On Going tasks</h2>
    
      </ul>
      <hr>
      
      <div class="tab-content">
      
                  
  
        @foreach ($tasksgiven as $item)
            
                      <div class="row">
          <div class="col-2">
              @if(!$item->acpstat || !$item->comstat || !$item->cmpstatnew)
<img src="images\{{$item->taker}}.jpg"  style= " border-radius: 50%; height:100px; width:100px;">
 Assigned to user: {{$item->taker}}          

</div>
    
          <div class="col-10">
            <h3>

           {{($item->body)}}
        
          </h3>
          Task reward : ${{$item->value}}
          @if($item->acpstat && !$item->comstat)
           <p class="text-success">Your task is accepted, and is under progress.</p>
           <div class="progress">
              <div class="progress-bar bg-success" style="width:50%"></div>
            
            </div>
            <br>
           
          @endif
          @if(!$item->acpstat)
       <p class="text-danger">   Your task is not yet accepted</p>
       <div class="progress">
          <div class="progress-bar bg-success" style="width:20%"></div>
        
        </div>
        <br>
        We have recieved your payment, you can cancle the task until the user accepts it.
        
        
        @endif
         @if ( $item->acpstat && $item->comstat && !$item->cmpstatnew)
         <br>


         The User have completed the task, please verify and press this button to make payment: <button class="btn-success"onclick="window.location.href='/whattt/public/tasks/verify/{{$item->id}}'">I have verified</button>
        <br>
      <br>
         <div class="progress">
            <div class="progress-bar bg-success" style="width:80%"></div>
          
          </div>
          <br>
       

         @endif
         @endif

          </div>
          </div>
          <br>
        @endforeach
        </div>
        </div>
      
    </div>
        
      </div>
    
    
    
</div>


@endsection




