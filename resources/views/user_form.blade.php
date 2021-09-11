<!DOCTYPE html>
<html lang="en">
<head>
    <title>User</title>
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
        <h2> User form</h2>
        <a href="{{url('users')}}" class="btn btn-primary">User List</a>
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
    <form  method="POST"  action="{{url('user/store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="email">Full Name:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="pwd">Age:</label>
            <input type="number"   min="1" max="150" class="form-control" id="pwd" placeholder="Enter  Age" name="age">
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


        <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="profile_image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
            </div>
        </div>


        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
