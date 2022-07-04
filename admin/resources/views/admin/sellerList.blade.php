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

    
    <p><br>admin.</p>
    <div>
        <a class = "btn btn-outline-primary" href="{{route('addSeller')}}">Add Medicine seller</a>
        <a class = "btn btn-outline-primary" href="{{route('details')}}"><-Back</a><br>
        <form class="d-flex" role="sellerSearch" method="get" action="{{route('sellerSearch')}}">
            <input class="form-control me-2" type="sellerSearch" name="sellerSearch" placeholder="Search" aria-label="sellerSearch">
            @error('sellerSearch')
                {{$message}}<br>
            @enderror

            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>


    </div>

    <hr>
    <center>
        <h1>Medicine Seller List</h1>
    </center>
    <hr>
    <table border="1" class="table table-dark table-hover">
        <tr height="50px">
            <th width="100px">Id</th>
            <th width="100px">Name</th>
            <th width="100px">Email</th>
            <th width="100px">Phone</th>
            <th width="100px">Address</th>
            <th width="100px">Action</th>
            
            <th width="100px">Status</th>
            
        </tr>

        @foreach($sellers as $sellers)
            <tr height="50px">
                <td>{{$sellers->id}}</td>
                <td>{{$sellers->name}}</td>
                <td>{{$sellers->email}}</td>
                <td>{{$sellers->phoneNo}}</td>
                <td>{{$sellers->address}}</td>
                
                <td><a href="{{route('editSeller',['id'=>$sellers->id])}}"><button type="button" class="btn btn-warning">Update</button></a> 
                <a href="{{route('delete',['id'=>$sellers->id])}}"><button type="button" class="btn btn-secondary">Delete</button></a></td>

                @if($sellers->status==1){

                    <td><a href="{{route('status',['id'=>$sellers->id])}}"><button type="button" class="btn btn-success">Active</button></a></td>  
                }
                    
                @else
                {
                    <td><a href="{{route('status',['id'=>$sellers->id])}}"><button type="button" class="btn btn-danger">Deactivated</button></a></td> 
                }
                    
                @endif
                
                 
            </tr>
        @endforeach
    </table>
    <hr>

@endsection

</body>
</html>