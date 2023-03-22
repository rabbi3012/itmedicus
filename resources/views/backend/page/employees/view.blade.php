@extends('backend.master')
@section('content')

  <div class="form-group">
    <label for="exampleInputEmail1">employees_name</label>
    <input value="{{$employees->employees_name}}" type= "text" name="employees_name" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">company_id</label>
    <input value="{{$employees->company_id}}" type= "text" name="company_id" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input value="{{$employees->email}}" type= "text" name="email" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">phone</label>
    <input value="{{$employees->phone}}" type= "text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

@endsection