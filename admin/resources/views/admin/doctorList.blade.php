<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{color:white;}
    </style>
</head>
<body>
@extends('layout.addDrLayout')
@section('content')

    
    <p><br>admin.</p>
    

    <hr>
    <center>
        <h1>Doctors List</h1>
    </center>
    <div>
        <a class = "btn btn-outline-primary" href="{{route('addDoctor')}}">Add Doctor</a>
        <a class = "btn btn-outline-primary" href="{{route('details')}}"><-Back</a><br>
        <form class="d-flex" role="drSearch" method="get" action="{{route('drSearch')}}">
            <input class="form-control me-2" type="drSearch" name="drSearch" placeholder="Search" aria-label="drSearch">
            @error('drSearch')
                {{$message}}<br>
            @enderror

            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>


    </div>
    
    <hr>
    <table border="1" class="table table-dark table-hover">
        <tr height="50px">
            <th width="100px">Id</th>
            <th width="100px">Name</th>
            <th width="100px">Emai;</th>
            <th width="100px">Phone</th>
            <th width="100px">Address</th>
            <th width="100px">Speciality</th>
            <th width="100px">Action</th>
            <th width="100px">Status</th>
        </tr>

        @foreach($doctors as $doctors)
            <tr height="50px">
                <td>{{$doctors->id}}</td>
                <td>{{$doctors->name}}</td>
                <td>{{$doctors->email}}</td>
                <td>{{$doctors->phoneNo}}</td>
                <td>{{$doctors->address}}</td>
                <td>{{$doctors->speciality}}</td>
                <td><a href="{{route('editDr',['id'=>$doctors->id])}}"><button type="button" class="btn btn-warning">Update</button></a>  
                    <a href="{{route('delete',['id'=>$doctors->id])}}"><button type="button" class="btn btn-secondary">Delete</button></a></td>
                 
                @if($doctors->accessibilty==1){

                    <td><a href="{{route('accessibilty',['id'=>$doctors->id])}}" ><button type="button" class="btn btn-success">Active</button></a></td>  
                }
                    
                @else
                {
                    <td><a href="{{route('accessibilty',['id'=>$doctors->id])}}"><button type="button" class="btn btn-danger">Deactivated</button></a></td> 
                }
                    
                @endif
                 
                
                
                     
               



                
                {{-- <td><a href="{{route('accessibility',['id'=>$doctors->id])}}">{{$doctors->accessibilty}}</a></td>  --}}
            </tr> 
        @endforeach
    </table>
    <hr>

@endsection

</body>
</html>