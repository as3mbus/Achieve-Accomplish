@extends('layouts.app')

@section('content')
<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');

</script>
<div class="container vh100 margin0">
  <div class="jumbotron vh100 bg-dark fg-gold  margin0">
    <h1>Contact US</h1><br><br>
      <div class="well well-lg bg-gold fg-black">
        <h2>There are many way to contact us but we mostly use telegram for communication</h2>
        <h2>Telegram : @as3mbus</h2>
        <h2>github   : <a href="http://github.com/as3mbus/">Link</a></h2>
        <h2>facebook : <a href="https://www.facebook.com/as3mbus">Link</a></h2>
        <h2>Twitter  : <a href="https://twitter.com/as3mbus">Link</a></h2>
      </div>
  </div>
</div>

@endsection
