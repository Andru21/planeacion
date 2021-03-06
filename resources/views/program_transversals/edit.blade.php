@extends('layouts.app')

@section('title', 'Transversal Programming Edit')

@section('content')
<h2 align="center" style="margin-top: 20px">Edición de la Programación Transversal CGTS</h2>

<form class="form-group" method="POST" action="/program_transversals/{{$program_transversal->id}}">
@method('PUT')
@csrf
	
	@include('forms.program_transversals')
	
	<div class="row justify-content-center" style="margin-top: 20px">
		<div class="col-1">
			<button type="submit" class="btn btn-warning">Actualizar</button>
		</div>
		<div class="col-1">
			<a href="{{url('program_transversals')}}"><button type="button" class="btn btn-dark">Cancelar</button></a>
		</div>
	</div>
</form>
@endsection 