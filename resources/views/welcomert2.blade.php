<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if ($var %4 == 0)
<p>{{$var*4}}</p>
    
@else
<p>error</p>
    
@endif   

</body>
</html>