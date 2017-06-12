@extends('layouts.app')

@section('content')
<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');

</script>
<div class="jumbotron bg-dark margin0">
  <div class="container bg-light">
    <br><h1>F.A.Q.</h1><br><br>
    <div class="well well-lg bg-dark fg-gold">
      <h3>What is this ?</h3>
      <p>This is a productivity webapp where you can increase your
        time efficiency for doing things by posting some work that can
         be done by other people. At the same time you can do more thing
          that you want instead</p>
      <br>
    </div>
    <div class="well well-lg">
      <h3>How this Work ?</h3>
      <p>it's simple, just create a new quest for some work that you want
      other people to do, and wait for applicant so you can do other work.
      In the mean time you can take other work from here and get extra
      reward that you deserve for doing some task</p>
      <br>
    </div>
    <div class="well well-lg bg-dark fg-gold">
      <h3>Is there any charge of doing this stuff>?</h3>
      <p>all of the feature here is free to use, but it would be really
        appreciated if someone give us some support to keep this project
        live, running, and developed by motivated developer </p>
      <br>
    </div>
    <div class="well well-lg">
      <h3>How can i support to this project ?</h3>
      <p>Everyone can support us by giving a "good" feedback. Other
        than that support can also come in form of contribution at github.
       Not to forgot this project can also be supported in form of donation
       to our hardworking developer</p>    </div>
      <br>
    </div>
  </div>
</div>

@endsection
