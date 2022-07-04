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

    <h1>Update Doctor</h1>
    
    <form method="post" action="{{url('/updateDr/'.$edit->id)}}">
        {{@csrf_field()}}
 
        Doctor's Name: <input type="text" name="name" placeholder="Name" value="{{$edit->name}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror

        Doctor's Email: <input type="text" name="email" placeholder="Email" value="{{$edit->email}}"><br>
        @error('email')
            {{$message}}<br>
        @enderror

        Doctor's Contact No: <input type="text" name="phoneNo" placeholder="" value="{{$edit->phoneNo}}"><br>
        @error('phoneNo')
            {{$message}}<br>
        @enderror

        Doctor's Address: <input type="text" name="address" placeholder="" value="{{$edit->address}}"><br>
        @error('address')
            {{$message}}<br>
        @enderror

        Doctor's Speciality: <input type="text" name="speciality" placeholder="" value="{{$edit->speciality}}"><br>
        @error('speciality')
            {{$message}}<br>
        @enderror

        

        <input type="submit" value="Update">
        <div>
            <a class = "btn btn-outline-primary" href="{{route('drdetails')}}"> <-Back</a><br>
    
        </div>
        
        
        
        
    </form>
    @endsection('content')
</body>
</html>