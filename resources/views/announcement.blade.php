@extends('layouts.app')

@section('content')
<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');

</script>
  <div class="jumbotron margin0 bg-dark fg-white">
    <h1 style="padding:0 2vw"><span class="glyphicon glyphicon-flash"></span>Announcement </h1><br><br>
    <div class="well well-lg fg-black">
      <h2>Quest : Introduction</h2>
      <h3>Welcome to Qadding</h3>
      <p>Welcome to Qadding (Quest Adding) website for opportunist and opportunity creator This Website and it's system is still under construction so if you want to help and contribute to this project feel free and contact me below </p>
    </div>
    <div class="well well-lg fg-black">
      <h2>Quest : Description</h2>
      <h3>What is this ?</h3>
      <p>Qadding is a place where you can create a quest, offer it to the board so people would do it. That way you can skip your job and let other people do it for you :)<br>
         In other side you can find a suitable quest for you, do it and get the reward it's offer.  </p>
    </div>
  </div>

@endsection
