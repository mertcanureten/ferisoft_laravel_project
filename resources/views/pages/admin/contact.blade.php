@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row">
		<table id="table"></table>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
$('#table').DataTable( {
    ajax: {
        url: "{{route('contact_list')}}",
        dataSrc: ''
    },
    columns: [
		{data: 'name'},
		{data: 'message'},
		{data: 'created_at'}
	]
} );

</script>
@stop
