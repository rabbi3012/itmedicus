@extends('backend.master')
@section('content')
<form action="{{route('employees.store')}}" method="POST">

@csrf

  <div class="form-group">
    <label for="exampleInputEmail1">employees_name</label>
    <input type="text" name="employees_name" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">company_id</label>
    <input type="text" name="company_id" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="logo" name="email" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

 <br> <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection