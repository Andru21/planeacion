@extends('layouts.app')

@section('title', 'Results Create')

@section('content')
<h2 align="center" style="margin-top: 20px">Creación de Resultados de Aprendizaje CGTS</h2>

<form class="form-group" method="POST" action="/results">
@csrf
	
	@include('forms.results')

	<div class="row justify-content-center" style="margin-top: 20px">
		<div class="col-1">
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
		<div class="col-1">
			<a href="{{url('results')}}"><button type="button" class="btn btn-dark">Cancelar</button></a>
		</div>
	</div>
</form>

@endsection 