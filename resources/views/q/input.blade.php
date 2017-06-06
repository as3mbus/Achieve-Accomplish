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
      <form class="form-horizontal" action="{{ url('q/new')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="updated_by" value="belum divalidasi">
        <div class="form-group has-info">
          <label for="inputEmail" class="col-md-2 control-label"> Nama Quest</label>
          <div class="col-md-9">
            <input name="quest" class="form-control" placeholder="Quest" required="required">
          </div>
        </div>
        <div class="form-group has-info">
          <label for="textArea" class="col-md-2 control-label">Description</label>
          <div class="col-md-9">
            <textarea  class="form-control" placeholder="Description about the quest" name="description"></textarea>
          </div>
        </div>
        <div class="form-group has-info">
          <label for="inputEmail" class="col-md-2 control-label"> Task</label>
          <div class="col-md-9">
            <input name="task" class="form-control" placeholder="Help Friend" required="required">
          </div>
        </div>
        <div class="form-group has-info">
          <label for="inputEmail" class="col-md-2 control-label"> Max Score</label>
          <div class="col-md-9">
            <input name="maxscore" class="form-control" placeholder="e.g. 100, 3, 2" required="required">
          </div>
        </div>
        <div class="form-group has-info">
          <label for="textArea" class="col-md-2 control-label">Task Description (optional)</label>
          <div class="col-md-9">
            <textarea  class="form-control" placeholder="Describe task" name="taskdescription"></textarea>
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
