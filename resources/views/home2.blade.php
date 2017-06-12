@extends('layouts.app') @section('content')
<script type="text/javascript">
  (function($) {
    $(document).ready(function() {

      // hide .navbar first
      $(".navbar").hide();

      // fade in .navbar
      $(function() {
        $(window).scroll(function() {

          // set distance user needs to scroll before we start fadeIn
          if ($(this).scrollTop() > 100) {
            $('.navbar').fadeIn();
          } else {
            $('.navbar').fadeOut();
          }
        });
      });

    });
  }(jQuery));
</script>

<div class="minh100vh jumbotron bg-dark fg-white margin0" style="padding-bottom:0">
  <div class="row text-center" style=" padding: 20px 0">
    <h1>Achieve & Accomplish</h1><br>
    <p>Achieve and Accomplish Your Goal with Quest System</p><br>
    <a href="#1" class="btn btn-primary btn-lg" role="button" style="border-radius:50px"><span class="glyphicon glyphicon-chevron-down"></span></a>

  </div>
  <img style="margin:auto" src="{{url('/image/Main.png')}}" alt="scroll" class="img-responsive">
</div>

<div id="1" class="jumbotron bg-gold minh100vh margin0" style="padding: 3% 0;">
  <div class="row " style="padding: 6% 5vw;">
    <img src="{{url('/image/Main2.png')}}" alt="scroll" class="img-responsive" style="max-height: 50vh !important; float:left">
    <h1>Quest ?</h1>
    <h2>Ease the process of task by hiring person to do a task for a reward</p>
    <a href="#2" class="btn btn-primary btn-lg" role="button" style="border-radius:50px"><span class="glyphicon glyphicon-chevron-down"></span></a>

  </div>
</div>
<div id="2" class="jumbotron minh100vh bg-dark fg-white margin0" style="padding: 3% 0;">
  <div class="row" style="padding: 6% 0;">
      <div class="" style="padding: 0 5vw">
        <div class="col-sm-8">
        <h1>Create Quest</h1>
        <h2>Here you can create your own quest, publish it and manage it. there are no more explanation needed</p>
        <a href="#3" class="btn btn-primary btn-lg" role="button" style="border-radius:50px"><span class="glyphicon glyphicon-chevron-down"></span></a>

      </div>
    <div class="col-sm-4">
      <img  src="{{url('/image/Main3.png')}}" alt="scroll" class="img-responsive">
    </div>
  </div>
  </div>
</div>
<div id="3" class="jumbotron minh100vh bg-light fg-black margin0" style="padding: 3% 0;">
  <div class="row" style="padding: 6% 0;">
      <div class="" style="padding: 0 5vw">
        <div class="col-sm-8">
        <h1>Interested ?</h1>
        <h2>You can help make this idea become reality by contacting us or just by visiting pages and give some feedback </p>
          <div class="btn-group">
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              News <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/announcement">Announcement</a></li>
                <li><a href="/event">Event</a></li>
                <li><a href="/log">Update</a></li>                    </ul>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              Support <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="/faq">F. A. Q.</a></li>
                  <li><a href="/contact">Contact Us</a></li>
                  <li><a href="/tamu">Feedback</a></li>
                </ul>
            </li>
          </div>
            <a href="/about" class="btn btn-primary btn" role="button" >About</a>

          </div>
      </div>
    <div class="col-sm-4">
      <img  src="{{url('/image/Main4.png')}}" alt="scroll" class="img-responsive">
    </div>
  </div>
  </div>
</div>

@endsection
