<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="assets/img/Solo logo.png">

        <!--JavaScritp-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!--Bootstrap-->
        <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <!--Styles-->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <style>
            *{
                font-family: 'Nunito', sans-serif;
            }

            img{
                width: 150px;
                image-rendering: pixelated;
            }

            body{
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
            }

            .tab-nav a:visited,.tab-nav a:link,.tab-nav a:active{
                text-decoration: none;
                color: #1976d2;
            }

            .tab-nav{
                border-bottom: 4px solid #6c757d;  
                border-radius: 5px;
                font-weight: bold;
                padding: 10px;
                margin-bottom: 30px; 
            }
            
            .tab-nav:hover{
                border-bottom: 4px solid #1976d2; 
                padding: 10px;
            }

            .form-container{
                width: 35%;
                margin: 8%;
                font-weight: 600;
            }

            .table{
                width: 100%;
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 0 20px rgba( 0, 0, 0, 0.15)
            }

            .table thead tr{
                background-color: #1E88E5;
                color: white;  
                font-weight: bold;  
                text-align: left;
                white-space: nowrap;
            }

            .table th,
            .table td{
                padding: 12px 15px;
            }

            .table tbody td{    
                background-color: #64B5F6;
                border-bottom: 1px solid #ffffff66;
                font-size: 0.9em;
                font-weight: 600;
                text-align: left;
                white-space: nowrap;
            }

            .dataTables_paginate .pagination li{
                height: 40px;
                font-weight: bold;
            }

            .form-container input, .form-container select, .form-container textarea{
                border: 1px solid #6c757d;
                border-bottom: 3px solid #6c757d;
                border-radius: 10px;
            }

            .form-container input:hover, .form-container select:hover, .form-container textarea:hover{
                border: 1px solid #1976d2;
                border-bottom: 3px solid #1976d2;
            }

            .form-container input:focus, .form-container select:focus, .form-container textarea:focus{
                border: 1px solid #1976d2;
                border-bottom: 3px solid #1976d2;
            }

            .form-container button{
                background: #1976d2;
                width: 100px;
                height: 45px;
                margin: 10px;
                font-weight: bold;
                border-radius: 10px;
            }

            .form-container button:hover{
                background: #1565C0;
            }

            .modal-content button{
                background: #1976d2;
                width: 70px; 
                height: 40px; 
                margin: 10px; 
                font-weight: bold; 
                border-radius: 10px;
            }

            .button-group{
                text-align: right;
            }

            h3{
                font-weight: bold;
                text-align: left;
                margin: 30px;
            }
        </style>
    </head>

    <body>
        @auth
            @include('layouts.partials.navbar')

            <main class="form-container">
                @yield('content')
            </main>
            
        @endauth

        @guest
            <h3>Para ver el contenido <a href="/login">inicia sesion</a></h3>
        @endguest
        
        <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    </body>

</html>