@extends('layouts.app')
@section('content')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">About</th>
      <th scope="col">Pan Num</th>
      <th scope="col">Gst Num</th>
      <th scope="col">Image</th>
      <th scope="col">password</th>
      <th scope="col">Operation</th>      
    </tr>
  </thead>
  <tbody>
  @foreach($stores as $store)
    <tr>
      <th scope="row">{{$store->id}}</th>
      <td>{{$store->name}}</td>
      <td>{{$store->number}}</td>
      <td>{{$store->about}}</td>
      <td>{{$store->pan}}</td>
      <td>{{$store->gst}}</td>
      <td>@if(!empty($store->image))
                  <img src="{{asset('/images/'.$store->image)}}" style="width:50px;">
                  @endif</td>
      <td>{{$store->password}}</td>
      <td><a href="{{url('/edit/'.$store->id)}}" class="btn btn-success">Edit</a>
                  <a id="del" href="{{url('/delete/'.$store->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="{{asset('js/sweetalert.js')}}">
@endsection