@extends('layouts.app')

@section('content')
<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');

</script>
<div class="container">
  <div class="jumbotron">
    <h1> <span class="glyphicon glyphicon-question-sign"></span>About us</h1>
    <div class="well well-lg">
      <h1>Background</h1>
      <p>In this modern age we have forgot how simple to give an errand to someone who is willing to do it. instead we try hard looking for people that we trust and force him to do an errand that he isn't willing to do. In the it ended up with one-sided
        benefit for errand giver. With this Quest system we hope it could give an option for other people to give errand to other people that willing to do it for certain reward</p>
      <h1>Project Information</h1>
      <p>This project is created halfheartedly because of limited time
        from the developer and insufficient man power</p>
      <p>We create projects with love and hope to everyone so this
        project would be used for good and will benefit everyone who use it</p>
    </div>
  </div>
</div>

@endsection
