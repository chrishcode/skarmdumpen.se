<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skärmdumpen.se</title>
    <link href='http://fonts.googleapis.com/css?family=Finger+Paint' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
</head>
<body>
    <div class="wrapper">
    <div class="container show">
        <h1 class="logo"><a href="/">Skärmdumpen.se</a></h1>
        <div id="imgshow">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
                <input class="form-control link" type="text" name="link" value="{{ url($upload['uniqueId']) }}">
            </div>
            <img class="img" src="{{ url($upload['imgUrl']) }}" alt="{{ $upload['imgUrl'] }}">
        </div>
    </div>
    
        <div class="push"></div>
    </div>
    
    
    <div class="footer">
        <p>&copy; skarmdumpen.se - <a href="mailto:chris.wohlfarth@gmail.com">Kontakt</a></p>
    </div>
</body>
</html>