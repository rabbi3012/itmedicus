@extends('backend.master')
@section('content')
<h2>Company: list</h2>
 <a class="btn btn-primary" href="{{route('form')}}">Company: list</a>
 <br>
 <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">compony name</th>
      <th scope="col">email</th>
      <th scope="col">logo</th>
      <th scope="col">website</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($companies as $data)
  <tr>
      <th>{{$data->id}}</th>
        <td>{{$data->compony_name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->logo}}</td>
        <td>{{$data->website}}</td>
        <td>
          <a class="btn btn-success" href="{{route('companies.view',$data->id)}}">View</a>
          <a class="btn btn-primary" href="{{route('edit',$data->id)}}">Update</a>
          <a class="btn btn-danger" href="{{route('companies.delete',$data->id)}}">Delete</a>

        </td>
      </tr>
      @endforeach
  </tbody>
</table>
{{$companies->links()}}
@endsection