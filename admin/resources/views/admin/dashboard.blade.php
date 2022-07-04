<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layout.admin')
@section('content')

    
    <p><br>admin.</p>
    <div>
        <a class = "btn btn-outline-primary" href="{{route('drdetails')}}"> Doctor</a><br>
        <a class = "btn btn-outline-primary" href="{{route('sellerdetails')}}"> Medicine Seller</a><br>

    </div>

   {{-- <hr>
    <center>
        <h1>User Dashboard</h1>
    </center>
    <hr>
     <table border="1">
        <tr height="50px">
            <th width="100px">Id</th>
            <th width="100px">Name</th>
            <th width="100px">Emai;</th>
            <th width="100px">Phone</th>
        </tr>

        @foreach($accuonts as $accuonts)
            <tr height="50px">
                <td>{{$accuonts->id}}</td>
                <td>{{$accuonts->name}}</td>
                <td>{{$accuonts->email}}</td>
                <td>{{$accuonts->phoneNo}}</td>
                {{-- < <td><a href="{{route('user.details',['id'=>$users->id])}}">{{$users->name}}</a></td>  
            </tr>
        @endforeach
    </table> --}}
    <hr>

@endsection

</body>
</html>