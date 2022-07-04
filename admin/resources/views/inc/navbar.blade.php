<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
</head>
<body>
  <h1 class="text-center">AH Health Care System</h1>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pharmacy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('registration')}}">Registration</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
              </li>
              
              
            </ul>
            
          </div>
        </div>
      </nav>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
     
</body>
</html>










{{-- <div border="1" style="">
    <br><br><br><br>
<h4>Navbar</h4>

<div class="">
    <br><br><br>
    <a class = "btn btn-outline-primary" href="{{route('home')}}">Home</a><br>
    <a class = "btn btn-outline-primary" href="{{route('service')}}">service</a><br>
    <a class = "btn btn-outline-primary" href="{{route('OurTeams')}}">Our Team</a><br>
    <a class = "btn btn-outline-primary" href="{{route('AboutUs')}}">About Us</a><br>
    <a class = "btn btn-outline-primary" href="{{route('ContactUs')}}">Contact Us</a>
    <a class = "btn btn-outline-primary" href="{{route('logout')}}">logout</a>
    </div>
</div> --}}
