@extends('layouts.app')

@section('content')
<!-- change class to static navbar  -->
<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');

</script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are not logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
