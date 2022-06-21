
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value="{{ csrf_token() }}">
        <title>Laravel + Vue</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
       <script src="https://kit.fontawesome.com/dfce142321.js" crossorigin="anonymous"></script>

        <link href="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"/>
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"/>
        
     </head>

    <body>        
        <div id="app"></div>    
       <H1>BUENAS NOCHES SOY ADMINISTRADOR</H1>
        <main role="main">
            
        </main> 
        
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script> 

    </body>
</html>
@endsection
