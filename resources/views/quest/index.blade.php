<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quest Index</title>
  </head>
  <body>
    <h1>Hello , {{$name}} </h1>
    <ul>
      @foreach($quest as $q )
      <li>{{$q->body}}</li>
      @endforeach
    </ul>
  </body>
</html>
