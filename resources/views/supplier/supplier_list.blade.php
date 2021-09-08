<!DOCTYPE html>
<html lang="en">
<head>
    <title>Supplier Example</title>
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
                    <ol><a href="{{url('classs')}}" class="btn btn-primary">Class</a></ol>
                    <ol><a href="{{url('user')}}" class="btn btn-primary">User</a></ol>
                </ul>
            </div>
        </div>
        <div class="col-sm-8">
               <div class="top">
                   <h2>Supplier Table</h2>
                   <a href="{{url('supplier/form')}}" class="btn btn-primary">Add Supplier</a>
               </div>

        @if (session('success'))
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="col-sm-12">
                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Organaization</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{$supplier->name}}</td>
                        <td>{{$supplier->email}}</td>
                        <td>{{$supplier->phone}}</td>
                        <td>{{$supplier->organization}}</td>
                        <td>{{$supplier->address}}</td>
                        <td>

                            <a href="{{url('supplier/edit/') . '/' . $supplier->id}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>
                            <a href="{{url('supplier/destroy/'). '/' . $supplier->id}}" class="btn btn-danger"> <i class="fa fa-trash"></i></a>

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
