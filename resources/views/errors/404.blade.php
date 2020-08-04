<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
</head>
<style>
body{
      background: url(../images/404.gif) no-repeat;
      background-size:100% 660px;
      position:relative;
}

button{
    position:absolute;
    margin-left:46%;
    margin-top:35%;
    padding:8px 15px;
    background:rgb(255, 0, 255);
    border-radius:5px;
    border: 5px white;
    opacity:0.2;

} 
button:hover{
    background:	rgb(255, 0, 128);
    opacity:1;
    padding:11px 20px;
    transition:0.5s;
}

button a{
    text-decoration:none;
    color: white;
}

</style>
<body>

<button id="404btn"><a  href="{{ route('general')}}">Go to home</a></button>

    
</body>
</html>