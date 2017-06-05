@extends('layouts.app')
@section('content')

<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');

</script>
<!-- @section('title') Peserta @endsection -->

@if(count($messages) > 0)


<table id="example" class="table table-striped center " style="width: 70vw;margin: 0 auto;" cellspacing="0">
	<thead>
		<td>No. </td>
		<td>Email </td>
		<td>Pesan</td>


	</thead>
	<tbody>
		<?php $no = 1; ?>
		@foreach($messages as $message)
		<tr>
			<td>{{$no}}</td>
			<td>{{$message->email}}</td>
			<td>{{$message->message}}</td>
			<td>{{$message->updated_by}}</td>

		</tr>
		<?php $no++; ?> @endforeach
		@else Belum ada yg daftar ): - semangat promosi @endif



	</tbody>

	@endsection
