<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layout.app')
@section('content')
<form method="post" action="{{url('/loginSub')}}">
    {{@csrf_field()}}


    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email'];} ?>">
      @error('email')
            {{$message}} <br>
        @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>">
      @error('password')
            {{$message}}<br>
        @enderror
    </div>
    <div>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <br>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


























@endsection
</body>
</html>