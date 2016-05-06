<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="{{asset('css/bootstrap/bootstrap.min.css')}}"></script>
@yield('style')
</head>
<body>

<div class="container">
@yield('content')
</div>
@yield('script')
</body>
</html>
