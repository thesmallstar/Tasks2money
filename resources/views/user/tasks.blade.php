@extends('layouts.app')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
@section('content')
<div class="container">

  <button type="button" class="btn btn-warning" onclick="window.location.href='/whattt/public/tasks/create'">Add a new Task</button>
    &nbsp;
    <button type="button" class="btn btn-success">Completed Tasks</button>


<br>
<br>
    <ul class="nav  center justify-content-center">
     
        <li><BUtton  class="btn btn-primary"data-toggle="tab" href="#menu1"  >Ongoing Tasks</button></li>
          &nbsp;
        <li><a data-toggle="tab" href="#menu2" class="btn btn-primary" >Tasks assigned to me</a></li>
    
      </ul>
      <hr>
      
      <div class="tab-content">
        <div id="menu1" class="tab-pane fade">
          <br>  
          <h3>Menu 1</h3>
          <p>Some content in menu 1.</p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <br>
          <h3>Menu 2</h3>
          <p>Some content in menu 2.</p>
        </div>
      </div>
    
    
    
</div>

@endsection