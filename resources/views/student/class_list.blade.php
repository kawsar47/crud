<!DOCTYPE html>
<html lang="en">
<head>
    <title> Class  Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
                   <ol><a href="{{url('user')}}" class="btn btn-primary">User</a></ol>
               </ul>
           </div>
        </div>
        <div class="col-sm-8">
            <div class="top">
                <h2>Class Table</h2>
                <a href="{{url('classs/form')}}" class="btn btn-primary">Add Class</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Class Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($classs as $class)
                    <tr>
                        <td>{{$class->class_name}}</td>


                        <td>
                            <a href="{{url('classs/edit/'). '/' .$class->id}} " class="btn btn-info"> <i class="fa fa-edit"></i></a>
                            <a href=" {{url('classs/destroy/'). '/' .$class->id}} " class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>

                            {{--                    <a href="{{url('contact/edit/'). '/' .$row->id}} " class="btn btn-info"> <i class="fa fa-edit"></i></a>--}}
                            {{--                    <a href="{{url('contact/destroy/'). '/' .$row->id}} " class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>--}}

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('success') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>

</body>
</html>
