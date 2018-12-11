@extends('layouts.app')

@section('title', 'Competitions Create')

@section('content')
<h2 align="center" style="margin-top: 20px">Creación de Competencias Academicas CGTS</h2>

<form class="form-group" method="POST" action="/competitions">
@csrf
	
	@include('forms.competitions')
	
	<div class="row justify-content-center" style="margin-top: 20px">
		<div class="col-1">
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
		<div class="col-1">
			<a href="{{url('competitions')}}"><button type="button" class="btn btn-dark">Cancelar</button></a>
		</div>
	</div>
</form>

@endsection 