<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student   Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
{{--    <link rel="stylesheet" href="('public/plugin/toaster/toastr.css')">--}}
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
{{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">--}}
{{--    <link rel="stylesheet" href="('public/plugin/bootstrap-sweetalert/dist/sweetalert.css')">--}}
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
                    <ol><a href="{{url('users')}}" class="btn btn-primary">User</a></ol>
                </ul>
            </div>
        </div>
        <div class="col-sm-8">
                <div class="top">
                    <h2>Student Table</h2>
                    <a href="{{url('students/form')}}" class="btn btn-primary">Add Student</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roll</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->roll}}</td>
                            <td>{{@$student->classs->class_name}}</td>
                            <td>{{$student->section}}</td>
                            <td>{{$student->phone}}</td>

                            <td>
                                <a href="{{url('student/edit/'). '/' .$student->id}} " class="btn btn-info"> <i class="fa fa-edit"></i></a>
                                <a href="{{url('student/destroy/'). '/' .$student->id}} " class="btn btn-danger" > <i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
        </div>
    </div>


</div>
{{--<script  src="('public/plugin/toaster/toastr.min.js')"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{--<script  src="('public/plugin/bootstrap-sweetalert/dist/sweetalert.min.js')"></script>--}}

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

{{--<script>--}}
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
