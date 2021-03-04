<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1.0>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Ecsite</title>
</head>
<body>
    <div class="container">
    <form method="post" action="">
    @csrf
    <input type="text" class="mt-3 form-control" name="title" placeholder="title">
    <input type="number" class=" form-control" name="price" placeholder="price">
    <input type="text" class="form-control" name="caption" placeholder="caption">
    <button type="submit" class="btn btn-primary mb-3">OK</button>
    </form>
    <a href="cart">Go to cart</a>
    <div class="row">
        @foreach($stucks as $stuck)
        <div class="card col-4" style="width:18rem">
        <div class="card-body">
        <h5 class="card-title">{{$stuck->title}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$stuck->price}} yen</h6>
        <p class="card-text">{{$stuck->caption}}</p>
        <form action="cart" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$stuck->id}}">
        <input type="hidden" name="title" value="{{$stuck->title}}">
        <input type="hidden" name="price" value="{{$stuck->price}}">
        <button type="submit" class="btn btn-primary">Cart in</button>
        </form>
        </div>
        </div>
        @endforeach
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>

</html>