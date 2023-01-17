<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid bg-dark">
      <div class="container">
          <nav class="navbar navbar-expand-sm">
              <a href="" class="navbar-brand" style="color:white">Laravel Work</a>
              <button class="navbar-toggler d-ld-none" type="button" data-toggle="collapes"
               data-toggle="#collapsibleNavId" aria-controls="collapsibleNavId"
               aria-expanded="false" aria-label="Toddle navigation">
              <span class="navbar-toggle-icon"></span>
              </button>
              <div class="collapes navbar-collapes" id="collapsibleNavId">
                  <ul class="navbar-nav mr-auto- mt-2 mt-lg-0">
                      <li class="nav-item">
                          <a href="{{route('register') }}" class="nav-link" style="color: white">Registration</a>
                      </li>
                      <li class="nav-item">
                          <a href="{{route('create') }}" class="nav-link" style="color: white">Customers</a>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
    </div>

    <form action={{route('register') }} method="POST">
        @csrf
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <div class="form-group">
          <label for=""><b>Name</b> </label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{old('name')}}">
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
        </div> 
        <div class="form-group">
            <label for=""><b>Email</b></label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
          </div> 
          <div class="form-group">
            <label for=""><b>Password</b></label>
            <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
          </div> 
          <div class="form-group">
            <label for=""><b>Confirm Password</b></label>
            <input type="password" name="password_confirm" id="" class="form-control" placeholder="Enter Confirm Password">
            <span class="text-danger">
                @error('password_confirm')
                    {{$message}}
                @enderror
            </span>
          </div> 
          <button class="btn btn-primary">Submit</button>
    </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>