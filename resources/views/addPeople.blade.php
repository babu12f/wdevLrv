<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Add People</title>
</head>
<body>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                       <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/savepeople" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="fatherName">Father Name</label>
                <input id="fatherName" type="text" class="form-control" name="fatherName" value="{{old('fatherName')}}">
            </div>
            <button type="submit" class="btn btn-primary">Save Person</button>
        </form>
    </div>
</body>
</html>