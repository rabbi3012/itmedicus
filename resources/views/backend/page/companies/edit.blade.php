@extends('backend.master')
@section('content')

<form action="{{route('companies.update',$companies->id)}}" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">compony name</label>
    <input value="{{$companies->compony_name}}" type= "text" name="compony_name" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input value="{{$companies->email}}" type= "text" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">logo</label>
    <input value="{{$companies->logo}}" type= "text" name="logo" class="form-control" id="exampleInputPassword1" placeholder="logo">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">website</label>
    <input value="{{$companies->website}}" type= "text" name="website" class="form-control" id="exampleInputPassword1" placeholder="website">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection