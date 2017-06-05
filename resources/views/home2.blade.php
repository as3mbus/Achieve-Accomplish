@extends('layouts.app')

@section('content')
<script type="text/javascript">

(function ($) {
  $(document).ready(function(){

    // hide .navbar first
    $(".navbar").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

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

  <div class="vh100 jumbotron text-center">
    <h1>Achieve & Accomplish</h1>
    <p>Achieve and Acrcomplish Your Goal with Quest System</p>
  </div>

  <div class="well " style=" padding:0 1vw 0 1vw;">
    <div class="row">

      <div class="col-sm-3">
        <img src="http://image.shutterstock.com/z/stock-vector-paper-scroll-with-feather-pen-icon-thin-line-for-web-and-mobile-modern-minimalistic-flat-design-275391179.jpg" alt="scroll" class="img-responsive">
      </div>
      <div class="col-sm-8">
        <h1>Quest ?</h1>
        <p>In this modern age we have forgot how simple to give an errand to someone who is willing to do it. instead we try hard looking for people that we trust and force him to do an errand that he isn't willing to do. In the it ended up with one-sided
          benefit for errand giver. With this Quest system we hope it could give an option for other people to give errand to other people that willing to do it for certain reward</p>
      </div>
    </div>
  </div>
  <div class="jumbotron" style=" padding:0 1vw 0 1vw;">
    <div class="row">

      <div class="col-sm-8">
        <h1>Create Quest</h1>
        <p>Here you can create your own quest, publish it and manage it. there are no more explanation needed</p>
      </div>
      <div class="col-sm-4">
        <img src="http://image.shutterstock.com/z/stock-vector-paper-scroll-with-feather-pen-icon-thin-line-for-web-and-mobile-modern-minimalistic-flat-design-275391179.jpg" alt="scroll" class="img-responsive">
      </div>
    </div>
  </div>

@endsection
