<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management - NearSource</title>
    <meta name="Employee Management - NearSource">
    <link href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">    
    <link href="{{asset('assets/bower_components/normalize.css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{asset('assets/bower_components/jquery-ui-1.11.4/external/jquery/jquery.js')}}">

</head>
<body>
    
    <header>
        <div class="logo">
            <img class="logo_nearsource" src="{{asset('assets/imgs/logo.jpg')}}"> 
        </div>
        <div class="tittle">
            <p class="ptittle">Employee Management</p>
        </div>
    </header>


    <div class="container">
        @yield('content')
    </div>

    
</body>
</html>

