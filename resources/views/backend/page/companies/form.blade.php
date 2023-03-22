@extends('backend.master')
@section('content')
<form action="{{route('companies.store')}}" method="POST">

@csrf

  <div class="form-group">
    <label for="exampleInputEmail1">compony name</label>
    <input type="text" name="compony_name" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">logo</label>
    <input type="logo" name="logo" class="form-control" id="exampleInputPassword1" placeholder="logo">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">website</label>
    <input type="text" name="website" class="form-control" id="exampleInputPassword1" placeholder="website">
  </div>

 <br> <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection