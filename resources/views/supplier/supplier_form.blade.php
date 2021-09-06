<!DOCTYPE html>
<html lang="en">
<head>
    <title>Supplier Form</title>
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
        <h2>Supplier Table</h2>
        <a href="{{url('suppliers')}}" class="btn btn-primary">Supplier List</a>
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

    <form  method="POST"  action="{{url('supplier/store')}}">
        <input type="hidden" name="id" value="{{@$supplier->id}}">
        @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="name" class="form-control" id="name" value="{{@$supplier->name}}" placeholder="Enter Name" name="name">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" value="{{@$supplier->email}}" placeholder="Enter Email" name="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="phone" class="form-control" id="phone" value="{{@$supplier->phone}}" placeholder="Enter Phone" name="phone">
            </div>
        </div>


        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Organization</label>
            <div class="col-sm-10">
                <input type="organization" class="form-control" value="{{@$supplier->organization}}" id="organization" placeholder="Enter Organization" name="organization">
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <textarea id="address" name="address" class="form-control" >
                    {{@$supplier->address}}
                </textarea>
            </div>
        </div>
        <button style="float: right" type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
