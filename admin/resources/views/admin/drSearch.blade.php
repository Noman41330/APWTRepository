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
    

    <hr>
    <center>
        <h1>Doctor List</h1>
    </center>
    <div>
        <a class = "btn btn-outline-primary" href="{{route('addDoctor')}}">Add Doctor</a>
        <a class = "btn btn-outline-primary" href="{{route('details')}}"><-Back</a><br>
        <form class="d-flex" role="drSearch" method="get" action="{{route('drSearch')}}">
            <input class="form-control me-2" type="drSearch" name="drSearch" placeholder="drSearch" aria-label="drSearch">
            @error('drSearch')
                {{$message}}<br>
            @enderror

            <button class="btn btn-outline-success" type="submit">drSearch</button>
          </form>


    </div>
    
    <hr>
    <table border="1">
        <tr height="50px">
            <th width="100px">Id</th>
            <th width="100px">Name</th>
            <th width="100px">Emai;</th>
            <th width="100px">Phone</th>
            <th width="100px">Address</th>
            <th width="100px">Speciality</th>
            <th width="100px">Action</th>
            <th width="100px">Accessibility</th>
        </tr>

        @foreach($drSearch as $drSearch)
            <tr height="50px">
                <td>{{$drSearch->id}}</td>
                <td>{{$drSearch->name}}</td>
                <td>{{$drSearch->email}}</td>
                <td>{{$drSearch->phoneNo}}</td>
                <td>{{$drSearch->address}}</td>
                <td>{{$drSearch->speciality}}</td>
                <td><a href="{{route('editDr',['id'=>$drSearch->id])}}">Update</a></td> 
                <td><a href="{{route('delete',['id'=>$drSearch->id])}}">Delete</a></td> 
                @if($drSearch->accessibilty==1){

                    <td><a href="{{route('accessibilty',['id'=>$drSearch->id])}}">Active</a></td>  
                }
                    
                @else
                {
                    <td><a href="{{route('accessibilty',['id'=>$drSearch->id])}}">Deactivated</a></td> 
                }
                    
                @endif
                 
                
                
                     
               



                
                {{-- <td><a href="{{route('accessibility',['id'=>$drSearch->id])}}">{{$drSearch->accessibilty}}</a></td>  --}}
            </tr> 
        @endforeach
    </table>
    <hr>

@endsection

</body>
</html>