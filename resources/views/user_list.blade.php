<!DOCTYPE html>
<html lang="en">
<head>
    <title>User </title>
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
                    <ol><a href="{{url('contact')}}" class="btn btn-primary">Contact</a></ol>
                    <ol><a href="{{url('suppliers')}}" class="btn btn-primary">Supplier</a></ol>
                    <ol><a href="{{url('users')}}" class="btn btn-primary">User</a></ol>
                </ul>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="top">
                <h2>User Table</h2>
                <a href="{{url('user/form')}}" class="btn btn-primary">Add User</a>
            </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Image</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->age}}</td>
                                <td>{{$row->gender}}</td>
                                <td>{{$row->profile_image}}</td>
                                <td>
                                    {{--<a href="{{url::to('edit/category'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>--}}

                {{--                    <a href="{{route('edit.user',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>--}}
                {{--                    <a href="{{route('delete.user',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>--}}
                                    <a href="{{url('user/edit/'). '/' .$row->id}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>
                                    <a href="{{url('user/destroy/'). '/' .$row->id}} " class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
        </div>
    </div>
</div>

</body>
</html>
