@extends('testfinal.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Testfinal Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $testfinal->name }}</h5>
        <p class="card-text">Address : {{ $testfinal->address }}</p>
        <p class="card-text">Tel : {{ $testfinal->tel }}</p>
  </div>
    </hr>
  </div>
</div>
