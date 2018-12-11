@extends('layouts.app')

@section('title', 'Programs Edit')

@section('content')
<h2 align="center" style="margin-top: 20px">Edición de Programas Academicos CGTS</h2>

<form class="form-group" method="POST" action="/programs/{{$program->id}}">
@method('PUT')
@csrf
	
	@include('forms.programs')
	
	<div class="row justify-content-center" style="margin-top: 20px">
		<div class="col-1">
			<button type="submit" class="btn btn-warning">Actualizar</button>
		</div>
		<div class="col-1">
			<a href="{{url('programs')}}"><button type="button" class="btn btn-dark">Cancelar</button></a>
		</div>
	</div>
</form>

@endsection 