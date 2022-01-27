@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row">
			<div class="col-md-6">
				<form action="{{route('form_add')}}" method="post" name="contact_form" id="contact_form">
          @csrf
				  <div class="form-group">
					  <label>Name</label>
					  <input class="form-control" type="text" name="name" id="name">
				  </div>
				  <div class="form-group">
					  <label>Message</label>
					  <textarea class="form-control" name="message" id="message" row=5></textarea>
				  </div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>

				</form>
			</div>
			<div class="col-md-6">
				<img src="https://ferisoft.com/assets/images/banner/slider2.jpg" alt="img" style="max-width: 100%">
			</div>
	</div>
</div>

@stop
