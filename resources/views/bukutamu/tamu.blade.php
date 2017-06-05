@extends('layouts.app')
@section('content')
<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');
</script>
<div class="container">
  <div class="row form-box">
    <div class="text-center"><h2 style="margin-top:11px">Buku Tamu</h2></div>
    <div class="" style="padding: 50px;">
      <form class="form-horizontal" action="{{ url('tamu')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="updated_by" value="belum divalidasi">
        <div class="form-group has-info">
          <label for="inputEmail" class="col-md-2 control-label"> Email</label>
          <div class="col-md-9">
            <input name="email" class="form-control" placeholder="Email" type="email" value="{{ old('email') }}" required="required">
          </div>
        </div>
        <div class="form-group has-info">
          <label for="textArea" class="col-md-2 control-label">Pesan</label>
          <div class="col-md-9">
            <textarea style="height:45vh" class="form-control" placeholder="Hello human" name="pesan"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-10 col-md-offset-5">
            <button type="submit" class="btn btn-raised btn-info">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
