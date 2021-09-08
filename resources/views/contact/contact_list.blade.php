<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact   Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .top{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar{
            margin-top: 30px;
        }

        .sidebar ul ol{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="sidebar">
                <ul>
                    <ol><a href="{{url('students')}}" class="btn btn-primary">Student</a></ol>
                    <ol><a href="{{url('classs')}}" class="btn btn-primary">class</a></ol>
                    <ol><a href="{{url('suppliers')}}" class="btn btn-primary">Supplier</a></ol>
                    <ol><a href="{{url('user')}}" class="btn btn-primary">User</a></ol>
                </ul>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="top">
                <h2>Class Table</h2>
                <a href="{{url('contact/form')}}" class="btn btn-primary">Add Contact</a>
            </div>


    <h2>Contact Table</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contact as $row)
            <tr>
                <td>{{@$row->user->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->phone}}</td>
                <td>{{$row->address}}</td>
                <td>
                    <a href="{{url('contact/edit/'). '/' .$row->id}} " class="btn btn-info"> <i class="fa fa-edit"></i></a>
                    <a href="{{url('contact/destroy/'). '/' .$row->id}} " class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

{{--    <table class="table">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">#</th>--}}
{{--            <th scope="col">First</th>--}}
{{--            <th scope="col">Last</th>--}}
{{--            <th scope="col">Handle</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <th scope="row">1</th>--}}
{{--            <td>Mark</td>--}}
{{--            <td>Otto</td>--}}
{{--            <td>@mdo</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">2</th>--}}
{{--            <td>Jacob</td>--}}
{{--            <td>Thornton</td>--}}
{{--            <td>@fat</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">3</th>--}}
{{--            <td>Larry</td>--}}
{{--            <td>the Bird</td>--}}
{{--            <td>@twitter</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
        </div>
    </div>
</div>

</body>
</html>
