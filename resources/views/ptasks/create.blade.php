@extends('layouts.app')

@section('content')
<div class="container">



        <button type="button" class="btn btn-warning"  onclick="window.location.href='/whattt/public/tasks'">Home</button>
        &nbsp;

    &nbsp;
    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/completed'">Completed Tasks</button>

  
    <button type="button" class="btn btn-default"  onclick="window.location.href='/whattt/public/tasks/create'">Add a new Task</button>
    &nbsp;
    

    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/requests'">Tasks Requests</button>

    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/performing'">Performing tasks</button>
    <button type="button" class="btn btn-default" onclick="window.location.href='/whattt/public/tasks/waiting'">Awaited Confirmation</button>


       <br> 
       <br>
  
@if( Session::has('msg'))
<div class="alert alert-success">
{!! Session::has('msg') ? Session::get("msg") : '' !!}

</div>
@endif
         <hr>
        
 <form method="POST" action="create/{{auth::user()-> id}}">

       <div class="form-group">
           @csrf
         <label for="body">Task Name</label>
         <input type="text" class="form-control" name="body" id="" aria-describedby="helpId" placeholder="">
        
       </div>
       <div class="row">
       <div class="col-md-6">
       <div class="form-group">
         <label for="">Phone Number:</label>
         <input type="phone" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
       </div>

       <div class="form-group">
         
          <label for="">In case of  dispute ask:(leave blank if no one) </label><span style="display:inline;">
            
        <input type="number" class="form-control" name="dispute" id="" aria-describedby="helpId" placeholder="">
     
      </span>
    </div>
       </div>
       <div class="col-md-6">
       <div class="form-group">
         
            <label for="">Value</label><span style="display:inline;">

          ($) <input type="number" class="form-control" name="value" id="" aria-describedby="helpId" placeholder="">
        </span>
    </div>
    <div class="form-group">
         
        <label for="">Max number of days</label><span style="display:inline;">
          
      <input type="number" class="form-control" name="maxdays" id="" aria-describedby="helpId" placeholder="">
    </span>
</div>
          </div>
        </div>
          <button type="submit" class="btn btn-primary|secondary|success|danger|warning|info|light|dark|link">Submit</button>

  </form>
  
</div>



@endsection

