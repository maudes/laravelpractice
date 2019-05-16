<!DOCTYPE html>
<html lang="en">
<head>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
</head>
<body>
<nav class="navbar fixed-top navbar-light bg-dark">
        <a class="navbar-brand" style="color:white" href="/">The Smurfs</a>
</nav>   
<div style="padding-top:80px;"><img src="{{$article->image}}" class="rounded mx-auto d-block" alt=""></div>
<div class="col-sm-12 py-4 text-center">人物名稱：{{$article->title}} <br>
評語：{{$article->content}} </div>
<div class="col-sm-12 py-4 text-center">{{$article->updated_at}}</div>
<div class="col-sm-12 py-4 text-center">
        <a class="btn btn-light" href="/article" role="button">回到上一頁</a>
</div>

</body>
<footer class="bg-dark fixed-bottom text-white mt-4">  
    <!--<div class="col-md-8 text-left" style="padding:15px 20px" href="/">The Smurfs</div>-->    
    <div class="text-right small" style="padding:15px 20px">©2019 Maude practices Laravel.</div>
</footer>
</html>
