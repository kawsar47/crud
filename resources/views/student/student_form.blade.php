<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
{{--    <link rel="stylesheet" href="('public/plugin/toaster/toastr.css')">--}}
    {{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">--}}
{{--    <link rel="stylesheet" href="('public/plugin/bootstrap-sweetalert/dist/sweetalert.css')">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
        @csrf
        <div class="form-group">
            <label for="name"> Name:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
        </div>

        <div class="form-group">
            <label for="roll">Roll:</label>
            <input type="phone"    class="form-control" id="roll" placeholder="roll" name="roll">
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
                                    <option value="{{$row->id}}">{{$row->class_name}} </option>
                                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="section">Choose Section:</label>
            <select class="form-select form-control"  name="section">
                <option value=""> select Section</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>
        </div>



        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="phone"    class="form-control" id="phone" placeholder="Phone" name="phone">
        </div>



        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{--<script  src="('public/plugin/toaster/toastr.min.js')"></script>--}}
{{--<script  src="('public/plugin/bootstrap-sweetalert/dist/sweetalert.min.js')"></script>--}}

<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
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
{{--<script>--}}
{{--    --}}
{{--    --}}
{{--    @if(Session::has('messege'))--}}
{{--    var type="{{Session::get('alert-type','info')}}"--}}
{{--    switch(type){--}}
{{--        case 'info':--}}
{{--            toastr.info("{{ Session::get('messege') }}");--}}
{{--            break;--}}
{{--        case 'success':--}}
{{--            toastr.success("{{ Session::get('messege') }}");--}}
{{--            break;--}}
{{--        case 'warning':--}}
{{--            toastr.warning("{{ Session::get('messege') }}");--}}
{{--            break;--}}
{{--        case 'error':--}}
{{--            toastr.error("{{ Session::get('messege') }}");--}}
{{--            break;--}}
{{--    }--}}
{{--    @endif--}}
{{--</script>--}}

<script>
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
            },
            function(isConfirm) {
                if (isConfirm) {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    window.location.href = link;
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    });
</script>
</body>
</html>
