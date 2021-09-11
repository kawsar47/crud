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
    <form  action="{{url('user/store')}}"  method="POST" enctype="multipart/form-data">
{{--        <form action="{{route('update.category',$category->id)}}" method="post">--}}
        @csrf
        <input type="hidden" name="id" value="{{$user->id}}">
{{--        {{$user}}--}}
        <div class="form-group">
            <label for="email">Full Name:</label>
            <input type="name" class="form-control" id="name" value="{{$user->name}}"   name="name" required="">
        </div>



        <div class="form-group">
            <label for="pwd">Age:</label>
            <input type="number"   min="1" max="150" class="form-control" value="{{$user->age}}" id="pwd"  name="age" required="">
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-select form-control"  name="gender">
                <option value=""> select Gender</option>
                <option @if(@$user->gender == 'Male') selected @endif  value="Male">Male</option>
                <option @if(@$user->gender == 'Female') selected @endif  value="Female">Female</option>
                <option @if(@$user->gender == 'Other') selected @endif  value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="profile_image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>

                <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-default">Update</button>
    </form>
</div>

</body>
</html>
