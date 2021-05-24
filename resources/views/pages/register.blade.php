<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @include('includes.nav')
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>

<main>
    <div class="container">
        <div class="offset-md-3 col-md-6 offset-md-3 mt-3 shadow p-3 mb-5 bg-body rounded">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
            <form method = "POST" action = "{{route('store')}}"> 
                @csrf
                <div class="mb-3"> 
                    <label for="exampleInputEmail1" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name = "full_name" value = "">
                </div>
                <div class="mb-3"> 
                    <label for="exampleAdd" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleAdd" name = "address" value = "">
                </div>
                <div class="mb-3"> 
                    <label for="exampleAdd" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="exampleAdd"  name = "phone" value = "">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gender</label>
                    <select class="form-select" name = "gender"  aria-label="Default select example">
                        <option value="">- SELECT -</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ward</label>
                    <select class="form-select" name = "ward"  aria-label="Default select example">
                        @if(count($wards) > 0)
                        <option value="">- SELECT -</option>
                            @foreach($wards as $ward)
                                <option value="{{$ward->id}}">{{$ward->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>