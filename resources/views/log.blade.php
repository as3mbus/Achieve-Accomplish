@extends('layouts.app')

@section('content')
<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');

</script>
<div class="jumbotron bg-dark fg-white margin0">
  <div class="panel-title">
    <h1>Update Log</h1>
    <br><br>
  </div>
  <div class="jumbotron bg-gold fg-white" style="padding-left: 2vw">
      <h1>Update 0.0.0.3</h1>
      <h3>Multiple Page</h3>
      <p>In this update we add content to the page other than layout page </p>
  </div>
  <div class="well-lg bg-light fg-black" style="margin-bottom:1%">
      <h1>Update 0.0.0.2</h1>
      <h3>Dropdown & Gallery</h3>
      <p>In this patch we add dropdown to nav and add gallery for
         easier access to other pages, and advertisement of big quest</p>
  </div>
  <div class="well-lg bg-light fg-black">
      <h1>Update 0.0.0.1</h1>
      <h3>Layout</h3>
      <p>In this update we create initial layout of the system and it
        still far away from perfect</p>
  </div>
</div>

@endsection
