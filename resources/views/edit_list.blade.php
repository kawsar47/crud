<!DOCTYPE html>
<html lang="en">
<head>
    <title>User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2> User form</h2>
    <form  action="{{url('user/update/store',$user->id)}}"  method="POST">
{{--        <form action="{{route('update.category',$category->id)}}" method="post">--}}
        @csrf
        <div class="form-group">
            <label for="email">Full Name:</label>
            <input type="name" class="form-control" id="name" value="{{$user->name}}"   name="name" required="">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Category Name English</label>
            <input type="text" class="form-control" value="{{$category->category_en}}" id="english" aria-describedby="emailHelp" name="category_en" required="">
        </div>


        <div class="form-group">
            <label for="pwd">Age:</label>
            <input type="number"   min="1" max="150" class="form-control" value="{{$user->age}}" id="pwd"  name="age" required="">
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-select form-control"  name="gender">
                <option value=""> select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
