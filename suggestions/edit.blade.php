@extends('suggestions.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Suggestion</div>
  <div class="card-body">
       
      <form action="{{ url('suggestion/' .$suggestions->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$suggestions->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$suggestions->name}}" class="form-control"></br>
        <label>suggestion</label></br>
        <input type="text" name="suggestion" id="suggestion" value="{{$suggestions->suggestion}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop