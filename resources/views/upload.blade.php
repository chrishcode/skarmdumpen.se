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
    <div class="container">
        <h1 class="logo"><a href="/">Skärmdumpen.se</a></h1>
        <div id="imgform">
            <h1><span class="glyphicon glyphicon-cloud-upload"></span> Ladda upp bild</h1><br>
            <p class="desc">1. Tryck på Spaceknappen <span class="glyphicon glyphicon-hand-up"></span> <span class="arrow"> -> </span> 2. Välj bild <span class="glyphicon glyphicon-picture"></span> <span class="arrow"> -> </span> 3. Dela bildlänk med vänner! <span class="glyphicon glyphicon-link"></span></p><br>
            <form id="form" action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                <span class="btn btn-primary btn-file">
                    Bläddra... <input type="file" name="file" id="file" autofocus onchange="javascript:this.form.submit();">
                </span>

                <input type="hidden" value="{{ csrf_token() }}" name="_token">
            </form>
        </div>
    </div>
    
    <div class="push"></div>
    </div>
    
    
    <div class="footer">
        <p>&copy; skarmdumpen.se - <a href="mailto:chris.wohlfarth@gmail.com">Kontakt</a></p>
    </div>
</body>
</html>