@extends('layouts.app')
@section('content')
<head>
<style type="text/css">
	.reqError{
		color: #ff0000; /*Red Color*/
		font-weight: bold;
	}
</style>
</head>
<div class="container">
    <div class="row">
        <form name="registration" action="{{url('/')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name:</label>
            <span id="reqTxtName" class="reqError"></span><br>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" id="name">
        </div>
        <div class="form-group">
            <label for="name">Contact Number:</label>
            <span id="reqTxtcon" class="reqError"></span><br>
            <input type="text" class="form-control" name="num" placeholder="Enter Contact Number" id="num">
        </div>
        <div class="form-group">
            <label for="name">About the store:</label>
            <span id="reqTxtabout" class="reqError"></span><br>
            <textarea class="form-control" name="about" rows="3" id="about"></textarea>
        </div>
        <div class="form-group">
            <label for="name">pan card:</label>
            <span id="reqTxtpan" class="reqError"></span><br>
            <input type="text" class="form-control" name="pnum" placeholder="Enter Pan Number" id="pnum">
        </div>
        <div class="form-group">
            <label for="name">GST Number:</label>
            <span id="reqTxtgst" class="reqError"></span><br>
            <input type="text" class="form-control" name="gnum" placeholder="Enter GST Number" id="gnum">
        </div>
        <div class="form-group">
        <input type="file" name="image" class="form-control-file border">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <span id="reqTxtpas" class="reqError"></span><br>
            <input type="password" name="pass" class="form-control" placeholder="Enter password" id="pass">
        </div>
        <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            <span id="reqTxtpass" class="reqError"></span><br>
            <input type="password" name="cpass" class="form-control" placeholder="Enter Confirm password" id="cpass">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="{{asset('js/validation_script.js')}}">

@endsection