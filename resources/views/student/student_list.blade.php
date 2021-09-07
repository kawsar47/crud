<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student   Example</title>
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
    </style>
</head>
<body>

<div class="container">
    <div class="top">
        <h2>Student Table</h2>
        <a href="{{url('students/form')}}" class="btn btn-primary">Add Student</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Roll</th>
            <th>Class</th>
            <th>Section</th>
            <th>Phone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->roll}}</td>
                <td>{{$student->classs->class_name}}</td>
                <td>{{$student->section}}</td>
                <td>{{$student->phone}}</td>

                <td>
                    <a href="{{url('students/edit/'). '/' .$student->id}} " class="btn btn-info"> <i class="fa fa-edit"></i></a>
                    <a href="{{url('students/destroy/'). '/' .$student->id}} " class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>

{{--                    <a href="{{url('contact/edit/'). '/' .$row->id}} " class="btn btn-info"> <i class="fa fa-edit"></i></a>--}}
{{--                    <a href="{{url('contact/destroy/'). '/' .$row->id}} " class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>--}}

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


</div>

</body>
</html>
