<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Basic Table</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
        <tr>
            <th>Full Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->age}}</td>
                <td>{{$row->gender}}</td>
                <td>
                    {{--<a href="{{url::to('edit/category'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>--}}

{{--                    <a href="{{route('edit.user',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>--}}
{{--                    <a href="{{route('delete.user',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>--}}
                    <a href="#" class="btn btn-info"> <i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>
