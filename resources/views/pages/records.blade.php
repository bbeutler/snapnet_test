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
    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">S/N</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1; ?>
            @if(count($citizens) > 0)
              @foreach($citizens as $item)
                <tr>
                    <th scope="row">{{$count++}}</th>
                    <td>{{$item->id}}</td>
                    <td><a href="{{route('view', $item->id)}}">{{$item->full_name}}</a></td>
                    <td>{{$item->gender}}</td>
                    <td><a href = "{{route('view', $item->id)}}" class = "btn btn-sm btn-success">View</a></td>
                </tr>
                @endforeach
           @endif
        </tbody>
    </table>
    </div>
</main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>