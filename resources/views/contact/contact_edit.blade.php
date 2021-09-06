<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Form EDIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2> Contact Edit</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form  method="POST"  action="{{url('contact/store')}}">
        @csrf
        <input type="hidden" name="id" value="{{$contact->id}}">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" value="{{$contact->email}}" name="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="number"    class="form-control" id="phone" placeholder="Phone" value="{{$contact->phone}}" name="phone">
        </div>

        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{$contact->address}}" name="address">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Choose user</label>
            <select class="form-control"  name="user_id" required>
                <option disabled="" selected="">==choose one==</option>
                @foreach($user as $row)
                    <option value="{{$row->id}}" <?php if($row->id == $contact->user_id) echo "selected"; ?> >{{$row->name}} </option>
                @endforeach
            </select>

        </div>


        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">update</button>
    </form>
</div>

</body>
</html>
