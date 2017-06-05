@extends('layouts.app')
@section('content')

<script type="text/javascript">
  document.getElementById("naver").classList.add('navbar-static-top');
  document.getElementById("naver").classList.remove('navbar-fixed-top');

</script>
<!-- @section('title') Peserta @endsection -->

@if(count($quests) > 0)


<table id="example" class="table table-striped center " style="width: 70vw;margin: 0 auto;" cellspacing="0">
	<thead>
		<td>No. </td>
		<td>name </td>
		<td>desc</td>
    <td>task</td>


	</thead>
	<tbody>
		<?php $no = 1; ?>
		@foreach($quests as $quest)
		@foreach($tasks as $task)

		<tr>
			<td>{{$no}}</td>
			<td>{{$quest->name}}</td>
			<td>{{$quest->description}}</td>
			<td>{{$task->name}}</td>


		</tr>
    @endforeach
		<?php $no++; ?> @endforeach
		@else Belum ada yg daftar ): - semangat promosi @endif



	</tbody>

	@endsection
