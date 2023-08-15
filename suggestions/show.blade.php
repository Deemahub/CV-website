@extends('suggestions.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Suggestion Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $suggestion->name }}</h5>
        <p class="card-text">Suggestion : {{ $suggestion->suggestion }}</p>
  </div>
    </hr>
  </div>
</div>