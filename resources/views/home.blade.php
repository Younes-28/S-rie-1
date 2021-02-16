<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
   
   
   
   
   
   
   
   
   
    @if (is_int($var2) && is_int($Var1) )
    <p>{{$var1+$var2}}</p>
    <p>{{$var1-$var2}}</p>
    @else
        <p>Ne sont pas additionables et soustrayables</p>
    @endif
</body>
</html>