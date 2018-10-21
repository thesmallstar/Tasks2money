@extends('layouts.app')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
@section('content')
<div class="container">
 <button type="button" class="btn btn-warning"  onclick="window.location.href='/whattt/public/tasks'">Home</button>
    &nbsp;

    <button type="button" class="btn btn-primary"  onclick="window.location.href='/whattt/public/tasks/create'">Add a new Task</button>
    &nbsp;
  


   
    

    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/requests'">Tasks Requests</button>

    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/performing'">Performing tasks</button>
   
    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/waiting'">Awaited Confirmation</button>
      
   
   
    <br>
    <br>
<div class="card">
  <br>
    <ul class="nav  center justify-content-center">
    <h2>
       Completed Tasks</h2>
       
         </ul>
  <div class="card-body">
  
      <hr>
      
      <div class="tab-content">
      <? $Session['a']=0;?>                 
  
        @foreach ($tasksgiven as $item)
        @if($item->acpstat && $item->comstat && $item->cmpstatnew)
                      <div class="row">
          <div class="col-2">
<img src="http://localhost/whattt/public/images/{{$item->taker}}.jpg"  style= " border-radius: 50%; height:100px; width:100px;">
 Assigned to user: {{$item->taker}}          

</div>
          
          <div class="col-10">
            <h3>

           {{($item->body)}}
        
          </h3>
          Task reward : ${{$item->value}}
          
      
           <p class="text-success">All set, the task is complted. The money is paid to the user.</p>
           <div class="progress">
              <div class="progress-bar bg-success" style="width:100%"></div>
            
            </div>
            <br>
           
         
         
       

          </div>
          </div>
          <br>
          <?php 
          
          $session['a']=1; 
          
          ?> 
         @endif
        @endforeach
      
        <?php    
       if($session['a']=0){
        echo "It is empty here";

       }
       ?>
        </div>
        </div>

    </div>
       
      </div>
    
    
    
</div>


@endsection