<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <style>
    *{
    margin: 0px;
    padding: 0px;
}


.b{
    font-size: 50px;
    letter-spacing: 0.2em;
    color:white;
    font-family: "Adobe Caslon Pro Bold";
    font-weight: 600;
    padding: 30px 20px ;

}
    body{
        background-color:rgb(168, 22, 52);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .c{
        color:rgb(228, 235, 237);
        letter-spacing: 0.1em;
        font-size: 20px;
        font-family: sans-serif;
      margin-top: 50px;
        background-color: 
    }
    .a{
        font-size: 20px;
        letter-spacing: 0.2em;
        color: #e5e5e5;
        background-color: rgb(143, 16, 205);
    }
    .d{
      color: rgba(231, 241, 229, 0.9);
      margin-top: 80px;
    }
    .a1{
      font-size: 24px;
      letter-spacing: 0.2em;
      color: #e5e5e5;
    
    }
        .e{
            color: #f5f8fa;
        }
        .f{
            margin-top: 40px;
        }
        .g{
            border-width: 6px;
        }
        .i{ 
        border-width: 2px; }
        .h {
            margin-top: 50px;
            border-bottom: #2ab27b;
            border-width: 2px;
            background-color: #f5f8fa;
            color: #2a88bd;

        }
    </style>
</head>
<body>
<div class="container-fluid">
@yield('content')
    </div>
</body>
</html>
