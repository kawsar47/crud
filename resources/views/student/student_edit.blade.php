

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
        <h2>Students Table</h2>
        <a href="{{url('students')}}" class="btn btn-primary">Students List</a>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form  method="POST"  action="{{url('students/store')}}">
        <input type="hidden" name="id" value="{{$student->id}}">
        @csrf
        <div class="form-group">
            <label for="name"> Name:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter Name" value="{{$student->name}}" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" value="{{$student->email}}" name="email">
        </div>

        <div class="form-group">
            <label for="roll">Roll:</label>
            <input type="phone"    class="form-control" id="roll" placeholder="roll"  value="{{$student->roll}}" name="roll">
        </div>

        {{--        <div class="form-group row">--}}
        {{--            <label for="address" class="col-sm-2 col-form-label">Address</label>--}}
        {{--            <div class="col-sm-10">--}}
        {{--                <textarea id="address" name="address" class="form-control" >--}}
        {{--                    {{@$supplier->address}}--}}
        {{--                </textarea>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        <div class="form-group">
            <label for="exampleInputPassword1">Choose Classes:</label>
            <select class="form-control"  name="class_id" required>
                <option disabled="" selected="">==choose one==</option>
                                @foreach($class as $row)
                                    <option value="{{$row->id}}"<?php if($row->id == $student->class_id) echo "selected"; ?> >{{$row->class_name}} </option>

                                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="section">Choose Section:</label>
            <select class="form-select form-control"  name="section">
                <option value=""> select Section</option>
                {{--                <option value="A">A</option>--}}
                {{--                <option value="B">B</option>--}}
                {{--                <option value="C">C</option>--}}
                {{--                <option value="D">D</option>--}}
                {{--                <option value="E">E</option>--}}
                {{--                <option value="F">F</option>--}}
                <option @if($student->section = 'A') selected @endif value="A">A</option>
                <option @if($student->section = 'B') selected @endif value="B">B</option>
                <option @if($student->section = 'C') selected @endif value="C">C</option>
                <option @if($student->section = 'D') selected @endif value="D">D</option>
                <option @if($student->section = 'E') selected @endif value="E">E</option>
                <option @if($student->section = 'F') selected @endif value="F">F</option>

            </select>
        </div>



        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="phone"    class="form-control" id="phone" placeholder="Phone" value="{{$student->phone}}" name="phone">
        </div>



        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">update</button>
    </form>
</div>

</body>
</html>
