@extends('layouts.app')

@section('content')
<div class="container">
    <button type="button" class="btn btn-warning"  onclick="window.location.href='/whattt/public/tasks'">Home</button>
    &nbsp;
  <br>
<form method="POST"  action="paysecurely/{{auth::user()-> id}}">
@csrf

<br>
@if( Session::has('msg'))
<div class="alert alert-success">
{!! Session::has('msg') ? Session::get("msg") : '' !!}

</div>
@endif
<div class="form-group">
<div class="row">
<div class="col-6">

        <input type="number" class="form-control" name="value" id="" aria-describedby="helpId" placeholder="Enter the amount">
      </div>
 <div class="col-6">
   
      <button type="submit" class="btn btn-success">Pay Securely</button>
    </div>
 </form>
<div>
  <p style= "text-align: center; font-weight:bold; font-size:25px;">
    <br>
  
 Current balance: {{Auth::user()->money}}$
 </p>

</div>
@endsection