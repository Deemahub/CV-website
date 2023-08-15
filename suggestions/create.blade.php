@extends('suggestions.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Suggestion</div>
  <div class="card-body">
       
      <form action="{{ url('suggestion') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Suggestion</label></br>
        <input type="text" name="suggestion" id="suggestion" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop