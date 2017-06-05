@extends('layouts.app')
@section('content')

<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');

</script>


    <h1>Hello , {{$quest->body}} </h1>

@endsection
