<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Class</title>
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
        <h2>Students class</h2>
        <a href="{{url('classs')}}" class="btn btn-primary">Class List</a>
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
    <form  method="POST"  action="{{url('classs/store')}}">
        <input type="hidden" name="id" value="{{@$classs->id}}">
        @csrf
        <div class="form-group">
            <label for="class_name"> Class Name:</label>
            <input type="class_name" class="form-control" id="class_name" placeholder="Enter Class Name" value="{{@$classs->class_name}}" name="class_name">
        </div>



        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
