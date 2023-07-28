<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .add-entry{
            position:absolute;
            top     : 7.5px;
            right   : 120px;
        }
        .add-post{
            position:absolute;
            top     : 7.5px;
            right   : 10px;
        }

        ul{
            list-style: none;
        }
    </style>
    <title>@yield('title')</title>
    <link rel="icon" href="https://zibal.in/assets/img/zibal-logo2.png" type="image/icon type">
</head>
<body>
    <header>
        @include('layout.navbar')
    </header>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

    @if(session()->has('destroy'))
    <div class="alert alert-danger">
        {{session('destroy')}}
    </div>
    @endif

    <div class="container">
        @yield('content')
    </div>

    <script>
    $(document).ready(function () {
        // Function to hide the alert after 3 seconds
        function hideSuccessAlert() {
            $('.alert-success').fadeOut(1000, function () {
                $(this).remove();
            });
        }

        // Call the hideSuccessAlert function after the page loads
        setTimeout(hideSuccessAlert, 1000);
    });

    $(document).ready(function () {
        // Function to hide the alert after 3 seconds
        function hideSuccessAlert() {
            $('.alert-danger').fadeOut(1000, function () {
                $(this).remove();
            });
        }

        // Call the hideSuccessAlert function after the page loads
        setTimeout(hideSuccessAlert, 2000);
    });
</script>
</body>
</html>