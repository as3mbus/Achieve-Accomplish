@extends('layouts.app')

@section('content')
<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');

</script>
<div class="jumbotron bg-dark fg-gold margin0">
    <h1>Events </h1><br><br>
    <div class="row">

      <div class="col-sm-4">
        <div class="well well-lg bg-gold fg-black">
          <h1>Launching<br> 3 May 2016</h1>
          <p>Join our launching party for our service. Meet the developer opportunist and oportunity maker in 1 place.</p>
        </div>
      </div>
      <div class="col-sm-4 ">
        <div class="well well-lg bg-dark fg-gold">
          <h1>Meeting <br> 1 May 2016</h1>
          <p>Meet the developer and become stakeholder of this project. Understand the concept of this project, and find it's benefits. Increase your oportunity by finding future client for your quest.        </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="well well-lg bg-gold fg-white">
          <h1>Publication <br> 20 April 2016</h1>
          <p>Join the publication and watch how the project built by philosopy of fantasy. Meet the developer and find new oportunity in this project "</p>
        </div>
      </div>
    </div>

</div>

@endsection
