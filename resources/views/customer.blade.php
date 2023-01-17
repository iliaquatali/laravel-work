<!doctype html>
<html lang="en">
  <head>
    <title>Laravel Crud </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-secondary">
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
                          <a href="{{route('view') }}" class="nav-link" style="color: white">Customers</a>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
    </div>
    

    <form action="{{$url }}" method="POST">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                {{-- Customer Registration --}}
                {{$title}}
            </h3>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label><b>Name</b></label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{isset($customer)?$customer->name:''}}">
                </div>
                <div class="form-group col-md-6">
                  <label><b>Email</b></label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{isset($customer)?$customer->email:''}}">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label><b>Password</b></label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                </div>
                <div class="form-group col-md-6">
                  <label><b>Confirm Password</b></label>
                  <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm Password" >
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label><b>City</b></label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{isset($customer)?$customer->city:''}}">
                </div>
                <div class="form-group col-md-6">
                  <label><b>Country</b></label>
                  <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="{{isset($customer)?$customer->country:''}}">
                </div>
              </div>
              <div class="form-group">
                <label><b>Address</b></label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{isset($customer)?$customer->address:''}}">
              </div>
              
              <div class="form-group">
                
                </div>
                <button class="btn btn-primary"><b>Submit</b></button>
              </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>