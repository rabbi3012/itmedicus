@extends('backend.master')
@section('content')
<h2>Employees: list</h2>
 <a class="btn btn-primary" href="{{route('employees.form')}}">Employees: list</a>
 <br>
 <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">employees_name</th>
      <th scope="col">company_id</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($employees as $data)
  <tr>
      <th>{{$data->id}}</th>
        <td>{{$data->employees_name}}</td>
        <td>{{$data->company_id}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone}}</td>
        <td>
          <a class="btn btn-success" href="{{route('employees.view',$data->id)}}">View</a>
          <a class="btn btn-primary" href="{{route('employees.edit',$data->id)}}">Update</a>
          <a class="btn btn-danger" href="{{route('employees.delete',$data->id)}}">Delete</a>

        </td>
      </tr>
      @endforeach
  </tbody>
</table>
{{$employees->links()}}
@endsection