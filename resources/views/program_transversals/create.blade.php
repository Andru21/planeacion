@extends('layouts.app')

@section('title', 'Transversal Programming Create')

@section('content')
<h2 align="center" style="margin-top: 20px">Programación Transversal CGTS</h2>

<form class="form-group" method="POST" action="/program_transversals">
@csrf
	
	@include('forms.program_transversals')
	
	<div class="row justify-content-center" style="margin-top: 20px">
		<div class="col-1">
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
		<div class="col-1">
			<a href="{{url('program_transversals')}}"><button type="button" class="btn btn-dark">Cancelar</button></a>
		</div>
	</div>
</form>
@endsection 