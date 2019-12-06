<!-- We include this file in the layouts.app -->

@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
	@endforeach
@endif

<!-- Display successful operations in our applications -->
@if(session('success'))
	<div class="alert alert-success">
		{{session('success')}}
	</div>
@endif

<!-- Display self captured errors -->
@if(session('error'))
	<div class="alert alert-danger">
		{{session('error')}}
	</div>
@endif