<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hola</h1>
 
    @foreach($Ejemplos as $ejemplito)
    
    <b>Id:</b> {{ $ejemplito -> id }} <br />
    <b>Nombre:</b> {{ $ejemplito -> nombre }} <br />
    <b>Descripcion:</b> {{ $ejemplito -> descripcion }} <br />
    <br />
    @endforeach 


</body>
</html>