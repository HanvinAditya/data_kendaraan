<!DOCTYPE html>
<html>

<head>
    @include('css')
</head>

<body>
    @include('header')

    @include('sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">


                @include('body')
            </div>
        </div>
        <!-- JavaScript files-->
        <script src="{{asset('main/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('main/vendor/popper.js/umd/popper.min.js')}}"> </script>
        <script src="{{asset('main/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('main/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
        <script src="{{asset('main/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('main/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('main/js/charts-home.js')}}"></script>
        <script src="{{asset('main/js/front.js')}}"></script>
</body>

</html>