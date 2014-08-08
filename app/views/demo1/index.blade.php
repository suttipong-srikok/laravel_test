<h1>My first demo page</h1>

@if(isset($name))
	{{ $age }}<br />
@else
	{{$name}} <br />
@endif
{{$age}}<br />
{{$location}}<br />