@extends('testfinal.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit Testfinal</div>
  <div class="card-body">

      <form action="{{ url('testfinal/' .$testfinal->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$testfinal->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$testfinal->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$testfinal->address}}" class="form-control"></br>
        <label>Tel</label></br>
        <input type="text" name="tel" id="tel" value="{{$testfinal->tel}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
