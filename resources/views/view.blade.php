<!doctype html>
<html lang="en">
  <head>
    <title>Laravel Crud</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<div class="form-group">
  <h1 class="text-center text-success"><b>Customers Record</b></h1>
</div>
      <div class="container">
        <table class="table">
           
            <thead>
                <tr>
                    <th><b>ID</b></th>
                    <th><b>Name</b></th>
                    <th><b>Email</b></th>
                    <th><b>City</b></th>
                    <th><b>Country</b></th>
                    <th><b>Address</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    
                    <td>{{$customer->customer_id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->city}}</td>
                    <td>{{$customer->country}}</td>
                    <td>{{$customer->address}}</td>
                    <td>
                      <a href="{{route('create')}}">
                      <button class="btn btn-success">Create</button>
                    </a>
                    </td>
                    
                    <td>
                      <a href="{{route('edit',$customer->customer_id)}}">
                      <button class="btn btn-primary">Edit</button>
                    </a>
                      <td>
                    <a href="{{route('destroy',$customer->customer_id)}}">
                      <button class="btn btn-danger">Delete</button>
                    </a>
                  </td>  
                  </td>
                </tr>
                @endforeach

            </tbody>
        </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>