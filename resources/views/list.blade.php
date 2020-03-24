<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>List</title>
</head>
<body>
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>@id</th>
                    <th>Name</th>
                    <th>FatherName</th>
                </tr>
                @foreach ($student_list as $st)
                    <tr>
                        <td>{{$st->id}}</td>
                        <td>{{$st->name}}</td>
                        <td>{{$st->father_name}}</td>
                    </tr>
                @endforeach
            </thead>
        </table>

    </div>
    
</body>
</html>