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
        <h1>Seller Search List</h1>
    </center>
    <div>
        <a class = "btn btn-outline-primary" href="{{route('addSeller')}}">Add Seller</a>
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

        @foreach($sellerSearch as $sellerSearch)
            <tr height="50px">
                <td>{{$sellerSearch->id}}</td>
                <td>{{$sellerSearch->name}}</td>
                <td>{{$sellerSearch->email}}</td>
                <td>{{$sellerSearch->phoneNo}}</td>
                <td>{{$sellerSearch->address}}</td>
                <td>{{$sellerSearch->speciality}}</td>
                <td><a href="{{route('editDr',['id'=>$sellerSearch->id])}}">Update</a></td> 
                <td><a href="{{route('delete',['id'=>$sellerSearch->id])}}">Delete</a></td> 
                @if($sellerSearch->accessibilty==1){

                    <td><a href="{{route('accessibilty',['id'=>$sellerSearch->id])}}">Active</a></td>  
                }
                    
                @else
                {
                    <td><a href="{{route('accessibilty',['id'=>$sellerSearch->id])}}">Deactivated</a></td> 
                }
                    
                @endif
                 
                
                
                     
               



                
                {{-- <td><a href="{{route('accessibility',['id'=>$sellerSearch->id])}}">{{$sellerSearch->accessibilty}}</a></td>  --}}
            </tr> 
        @endforeach
    </table>
    <hr>

@endsection

</body>
</html>