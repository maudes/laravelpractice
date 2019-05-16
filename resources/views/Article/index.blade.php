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
<!--<img src="{{asset('images/cool.jpg')}}" alt="">-->
          @foreach ($articles as $article)
          <div class="col-md-3 py4" style="padding-top:80px;">
          <a href="/article/{{$article->id}}">
               <img src="{{$article->image}}" alt="" style="...">
          </a>
          <br>
          人物名稱：{{$article->title}} <br>
          評語：{{$article->content}} <br>
     </div>  
     <!--<a class="btn btn-primary btn-sm enable" href="/article/{{$article->id}}">more</a>-->
          @endforeach
      <div class="col-sm-12 py-4 text-center">
               <a class="btn btn-light" href="/" role="button">回到首頁</a>
       </div>
       <br>
       <br>
       <br>
       <br>
</body>
<footer class="bg-dark fixed-bottom text-white mt-4">   
          <div class="text-right small"; style="padding:15px 20px";>©2019 Maude practices Laravel.</div>
</footer>
</html>
