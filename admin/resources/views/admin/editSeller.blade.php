<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
@extends('layout.addDrLayout')
    @section('content')
    
    <a class = "btn btn-outline-primary" href="{{route('sellerdetails')}}"><-Back</a><br>

    <h1>Update Seller</h1>
    
    <form method="post" action="{{url('/updateSeller/'.$edit->id)}}">
        {{@csrf_field()}}
 
        Seller's Name: <input type="text" name="name" placeholder="Name" value="{{$edit->name}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror

        Seller's Email: <input type="text" name="email" placeholder="Email" value="{{$edit->email}}" ><br>
        @error('email')
            {{$message}}<br>
        @enderror

        Seller's Contact No: <input type="text" name="phoneNo" placeholder="" value="{{$edit->phoneNo}}"><br>
        @error('phoneNo')
            {{$message}}<br>
        @enderror

        Seller's Address: <input type="text" name="address" placeholder="" value="{{$edit->address}}"><br>
        @error('address')
            {{$message}}<br>
        @enderror

        


        


        <input type="submit" value="Update">
    </form>
    @endsection('content')
</body>
</html>